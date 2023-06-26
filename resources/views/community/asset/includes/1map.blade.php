<script type="text/javascript">
    function buildLayers() {
    
     ol.control.LayerSwitcher = function(opt_options) {
    
    var options = opt_options || {};
    
    var tipLabel = options.tipLabel ?
      options.tipLabel : 'Legend';
    
    this.mapListeners = [];
    
    this.hiddenClassName = 'ol-unselectable ol-control layer-switcher';
    this.shownClassName = this.hiddenClassName + ' shown';
    
    var element = document.createElement('div');
    element.className = this.hiddenClassName;
    
    var button = document.createElement('button');
    button.setAttribute('title', tipLabel);
    element.appendChild(button);
    
    this.panel = document.createElement('div');
    this.panel.className = 'panel';
    element.appendChild(this.panel);
    
    var this_ = this;
    
    element.onmouseover = function(e) {
      this_.showPanel();
    };
    
    button.onclick = function(e) {
      this_.showPanel();
    };
    
    element.onmouseout = function(e) {
      e = e || window.event;
      if (!element.contains(e.toElement)) {
        this_.hidePanel();
      }
    };
    
    ol.control.Control.call(this, {
      element: element,
      target: options.target
    });
    
    };
    
    ol.inherits(ol.control.LayerSwitcher, ol.control.Control);
    
    ol.control.LayerSwitcher.prototype.showPanel = function() {
    if (this.element.className != this.shownClassName) {
      this.element.className = this.shownClassName;
      this.renderPanel();
    }
    };
    
    ol.control.LayerSwitcher.prototype.hidePanel = function() {
    if (this.element.className != this.hiddenClassName) {
      this.element.className = this.hiddenClassName;
    }
    };
    
    ol.control.LayerSwitcher.prototype.renderPanel = function() {
    
    this.ensureTopVisibleBaseLayerShown_();
    
    while (this.panel.firstChild) {
      this.panel.removeChild(this.panel.firstChild);
    }
    
    var ul = document.createElement('ul');
    this.panel.appendChild(ul);
    this.renderLayers_(this.getMap(), ul);
    
    };
    
    ol.control.LayerSwitcher.prototype.setMap = function(map) {
    // Clean up listeners associated with the previous map
    for (var i = 0, key; i < this.mapListeners.length; i++) {
      this.getMap().unByKey(this.mapListeners[i]);
    }
    this.mapListeners.length = 0;
    // Wire up listeners etc. and store reference to new map
    ol.control.Control.prototype.setMap.call(this, map);
    if (map) {
      var this_ = this;
      this.mapListeners.push(map.on('pointerdown', function() {
        this_.hidePanel();
      }));
      this.renderPanel();
    }
    };
    
    ol.control.LayerSwitcher.prototype.ensureTopVisibleBaseLayerShown_ = function() {
    var lastVisibleBaseLyr;
    ol.control.LayerSwitcher.forEachRecursive(this.getMap(), function(l, idx, a) {
      if (l.get('type') === 'base' && l.getVisible()) {
        lastVisibleBaseLyr = l;
      }
    });
    if (lastVisibleBaseLyr) this.setVisible_(lastVisibleBaseLyr, true);
    };
    
    
    ol.control.LayerSwitcher.prototype.setVisible_ = function(lyr, visible) {
    var map = this.getMap();
    lyr.setVisible(visible);
    if (visible && lyr.get('type') === 'base') {
      // Hide all other base layers regardless of grouping
      ol.control.LayerSwitcher.forEachRecursive(map, function(l, idx, a) {
        if (l != lyr && l.get('type') === 'base') {
          l.setVisible(false);
        }
      });
    }
    };
    
    ol.control.LayerSwitcher.prototype.renderLayer_ = function(lyr, idx) {
    
    var this_ = this;
    
    var li = document.createElement('li');
    
    var lyrTitle = lyr.get('title');
    var lyrId = lyr.get('title').replace(' ', '-') + '_' + idx;
    
    var label = document.createElement('label');
    
    if (lyr.getLayers) {
    
      li.className = 'group';
      label.innerHTML = lyrTitle;
      li.appendChild(label);
      var ul = document.createElement('ul');
      li.appendChild(ul);
    
      this.renderLayers_(lyr, ul);
    
    } else {
    
      var input = document.createElement('input');
      if (lyr.get('type') === 'base') {
        input.type = 'radio';
        input.name = 'base';
      } else {
        input.type = 'checkbox';
      }
      input.id = lyrId;
      input.checked = lyr.get('visible');
      input.onchange = function(e) {
        this_.setVisible_(lyr, e.target.checked);
      };
      li.appendChild(input);
    
      label.htmlFor = lyrId;
      label.innerHTML = lyrTitle;
      li.appendChild(label);
    
    }
    
    return li;
    
    };
    
    ol.control.LayerSwitcher.prototype.renderLayers_ = function(lyr, elm) {
    var lyrs = lyr.getLayers().getArray().slice().reverse();
    for (var i = 0, l; i < lyrs.length; i++) {
      l = lyrs[i];
      if (l.get('title') && l.get('visibleInLayerSwitcher')) {
        elm.appendChild(this.renderLayer_(l, i));
      }
    }
    };
    
    ol.control.LayerSwitcher.forEachRecursive = function(lyr, fn) {
    lyr.getLayers().forEach(function(lyr, idx, a) {
      fn(lyr, idx, a);
      if (lyr.getLayers) {
        ol.control.LayerSwitcher.forEachRecursive(lyr, fn);
      }
    });
    };
    
    var token;
    var container = document.getElementById('popup');
    var content = document.getElementById('popup-content');
    var closer = document.getElementById('popup-closer');
    
    $('#popup').css('left', '-50px');
    
    closer.onclick = function() {
    overlay.setPosition(undefined);
    closer.blur();
    return false;
    };
    
    var overlay = new ol.Overlay( /** @type {olx.OverlayOptions} */ ({
    title: 'Popup Layer',
    element: container,
    autoPan: true,
    visible:false,
    autoPanAnimation: {
      duration: 250
    }
    }));
    
    var ervenSource = new ol.source.Vector({});
    
    var ervenLayer = new ol.layer.Vector({
    title: 'Erven Selection Layer',
    visibleInLayerSwitcher: false,
    visible: true,
    source: ervenSource,
    style: [new ol.style.Style({
      stroke: new ol.style.Stroke({
        color: 'red',
        lineDash: [1],
        width: 2
      }),
      fill: new ol.style.Fill({
        color: 'rgba(255, 0, 0, 0.1)'
      })
    })]
    });
    
    var attribution = new ol.control.Attribution({
    collapsible: true
    });
    
    var view = new ol.View({
    center: ol.proj.transform([{{$community[0]->longitude}}, {{$community[0]->latitude}}], 'EPSG:4326', 'EPSG:3857'), // Take Lat/Lng to meters
    zoom: 17,
    visible: true
    });
    
    var baseLayerGroup = new ol.layer.Group({
    'title': 'Base Layers',
    visibleInLayerSwitcher: true,
    layers: []
    });
    
    var otherLayerGroup = new ol.layer.Group({
    'title': 'Other Layers',
    visibleInLayerSwitcher: true,
    layers: []
    });
    
    var map = new ol.Map({
    layers: [
      baseLayerGroup,
      otherLayerGroup
    ],
    overlays: [overlay],
    controls: ol.control.defaults({
      attribution: false
    }).extend([attribution]),
    target: 'map',
    view: view
    });
    
    var layerSwitcher = new ol.control.LayerSwitcher({
    tipLabel: 'Layer Control' // Optional label for button
    });
    map.addControl(layerSwitcher);
    
    var vv = 0;
    map.on('postcompose', function(evt) {
      if(vv < 1)
      {
        var lon = '{{$community[0]->longitude}}';
        var lat = '{{$community[0]->latitude}}';
        ervenSource.clear();
        var jqxhr = $.ajax({
          type: "GET",
          url: 'https://www.1map.co.za/api/v1/attributes/closest/1',
          dataType: 'json',
          timeout: 600000, // 10 minutes
          data: {
            showAttachments: false,
            longitude: lon,
            latitude: lat,
            token: token
          },
          error: function(xhr, status, error) {
            content.innerHTML = '<p>You clicked here:</p><code>' + hdms + '<br/>' + xystr + '</code><br/><br/><div id="info" class="alert alert-warning">Sorry, nothing found</div>';
            overlay.setPosition(coordinate);
            //// alert(error.message);
          },
          success: function(response) {
            if (response && response.result && response.result.geomResult && response.result.geomResult.features && response.result.geomResult.features.length > 0) {
              var properties = response.result.geomResult.features[0].properties;
              var highlightFeatures = (new ol.format.GeoJSON()).readFeatures(response.result.geomResult, {
                dataProjection: "EPSG:4326",
                featureProjection: "EPSG:3857"
              });
              ervenSource.addFeatures(highlightFeatures);
              coordinate = ol.extent.getCenter(highlightFeatures[0].getGeometry().getExtent());
              var pixel = map.getEventPixel(evt.highlightFeatures);
              var hit = map.forEachLayerAtPixel(pixel, function(layer) {
                return true;
              });
              //overlay.setPosition(coordinate);
            } else {
              content.innerHTML = '<p>You clicked here:</p><code>' + hdms + '<br/>' + xystr + '</code><br/><br/><div id="info" class="alert alert-warning">Sorry, nothing found</div>';
              overlay.setPosition(coordinate);
            }
          }
        });
      }
      vv = vv + 1;
    });
    
    map.on('singleclick', function(evt) {
      var coordinate = evt.coordinate;
      var hdms = ol.coordinate.toStringHDMS(ol.proj.transform(coordinate, 'EPSG:3857', 'EPSG:4326'));
      var xystr = ol.coordinate.toStringXY(ol.proj.transform(coordinate, 'EPSG:3857', 'EPSG:4326'), 8);
      
      overlay.setPosition(undefined);
      closer.blur();
      
      var lonlat = ol.proj.transform(coordinate, 'EPSG:3857', 'EPSG:4326');
      var lon = lonlat[0];
      var lat = lonlat[1];
      ervenSource.clear();
      var jqxhr = $.ajax({
        type: "GET",
        url: 'https://www.1map.co.za/api/v1/attributes/closest/1',
        dataType: 'json',
        timeout: 600000, // 10 minutes
        data: {
          showAttachments: false,
          longitude: lon,
          latitude: lat,
          token: token
        },
        error: function(xhr, status, error) {
          content.innerHTML = '<p>You clicked here:</p><code>' + hdms + '<br/>' + xystr + '</code><br/><br/><div id="info" class="alert alert-warning">Sorry, nothing found</div>';
          overlay.setPosition(coordinate);
          //// alert(error.message);
        },
        success: function(response) {
          console.log(response);
          if (response && response.result && response.result.geomResult && response.result.geomResult.features && response.result.geomResult.features.length > 0) {
            var properties = response.result.geomResult.features[0].properties;
            var highlightFeatures = (new ol.format.GeoJSON()).readFeatures(response.result.geomResult, {
              dataProjection: "EPSG:4326",
              featureProjection: "EPSG:3857"
            });
            ervenSource.addFeatures(highlightFeatures);
            coordinate = ol.extent.getCenter(highlightFeatures[0].getGeometry().getExtent());
            content.innerHTML = '<p>You clicked here:</p><code>' + xystr + '</code><br/><br/><div id="info" class="alert alert-success">' +
              'Erf No: ' + properties.erven_id + '<br/>' +
              'Portion No: ' + properties.portionno + '<br/>' +
              'Ownership Code: ' + properties.ownshp_cde + '<br/>' +
              'Ownership Desc: ' + properties.ownshp_dsc + '<br/>' +
              'Allotment No: ' + properties.allotmntno + '<br/>' +
              'Strand: No' + properties.strandno + '<br/>' +
              'Suburb: ' + properties.suburbname + '<br/>' +
              'City: ' + properties.cityname + '<br/>' +
              'Post Code: ' + properties.pcodestr + '<br/>' +
              '</div>';
            overlay.setPosition(coordinate);
          } else {
            content.innerHTML = '<p>You clicked here:</p><code>' + hdms + '<br/>' + xystr + '</code><br/><br/><div id="info" class="alert alert-warning">Sorry, nothing found</div>';
            overlay.setPosition(coordinate);
          }
        }
      });
    });
    
    map.on('pointermove', function(evt) {
    if (evt.dragging) {
      return;
    }
    var pixel = map.getEventPixel(evt.originalEvent);
    var hit = map.forEachLayerAtPixel(pixel, function(layer) {
      return true;
    });
    map.getTargetElement().style.cursor = hit ? 'pointer' : '';
    });
    
    var jqxhr = $.ajax({
    type: "GET",
    url: 'https://www.1map.co.za/api/v1/auth/login/',
    dataType: 'json',
    timeout: 60000 * 2, // 2 minutes
    data: {
    email: 'kwasi@profeciait.co.za',
    password: '@AprilMate123e'
    },
    
    error: function (xhr, status, error) {
    
    // alert(error);
    // content.innerHTML = '<p>You clicked here:</p><code>' + hdms + '<br/>' + xystr + '</code><br/><br/><div id="info" class="alert alert-warning">Sorry, nothing found</div>';
    },
    success: function (response) {
    
    if (response && response.result) {
    TEMPtoken = response.apiToken.token;
    // alert(TEMPtoken);
    // token = TEMPtoken;
    // alert(TEMPtoken);
    // token = "7f3c3ddf-22c3-4c43-926c-ed5f170190db";
    token = response.apiToken.token;
    
    /// token = TEMPtoken;
    
    
    }
    }
    ,
    async: false
    });
    
    //token = 'f332e34f-fc38-488e-bcbf-797a528492f5';
    
    // Clear existing Layers
    ervenSource.clear();
    otherLayerGroup.getLayers().clear();
    baseLayerGroup.getLayers().clear();
    
    if (token) {
      // Create OSM Base Layer
      var osmLayer = new ol.layer.Tile({
        title: 'OSM',
        visibleInLayerSwitcher: true,
        type: 'base',
        visible: false,
        source: new ol.source.OSM({
          hidpi: false,
          wrapX: false
        })
      });
    
      // Create NGI Base Layer
      var ngiLayer = new ol.layer.Tile({
        title: 'CD:NGI',
        visibleInLayerSwitcher: true,
        type: 'base',
        visible: false,
        source: new ol.source.XYZ({
          hidpi: false,
          wrapX: false,
          attributions: [
            new ol.Attribution({
              html: 'Tiles &copy; <a href="http://www.ngi.gov.za/">CD:NGI Aerial</a>'
            })
          ],
          urls: [
            "http://a.aerial.openstreetmap.org.za/ngi-aerial/{z}/{x}/{y}.jpg",
            "http://b.aerial.openstreetmap.org.za/ngi-aerial/{z}/{x}/{y}.jpg",
            "http://c.aerial.openstreetmap.org.za/ngi-aerial/{z}/{x}/{y}.jpg"
          ]
        })
      });
    
      // Create 1map Base Layer	
      var baseLayer = new ol.layer.Tile({
        title: '1map Base Layer',
        visibleInLayerSwitcher: true,
        type: 'base',
        visible: true,
        source: new ol.source.TileWMS({
          url: 'https://www.1map.co.za/api/v1/spatial/maptile/2/base',
          params: {
            'token': token,
            'CRS': 'EPSG:3857'
          },
          hidpi: false,
          serverType: 'geoserver',
          wrapX: false,
          crossOrigin: 'anonymous',
          attributions: [
            new ol.Attribution({
              html: '&copy; ' +
                '<a href="https://www.1map.co.za">1map Spatial Solutions (Pty) Ltd</a>'
            })
          ]
        })
      });
    
      // Create 1map Hybrid Layer	
      var baseLayerHybrid = new ol.layer.Tile({
        title: '1map Hybrid Layer',
        visibleInLayerSwitcher: true,
        type: 'base',
        visible: false,
        source: new ol.source.TileWMS({
          url: 'https://www.1map.co.za/api/v1/spatial/maptile/36/base',
          params: {
            'token': token,
            'CRS': 'EPSG:3857'
          },
          hidpi: false,
          serverType: 'geoserver',
          wrapX: false,
          crossOrigin: 'anonymous',
          attributions: [
            new ol.Attribution({
              html: '&copy; ' +
                '<a href="https://www.1map.co.za">1map Spatial Solutions (Pty) Ltd</a>'
            })
          ]
        })
      });
    
      // Create Empty Base Layer	
      var emptyBaseLayer = new ol.layer.Tile({
        title: 'None',
        visibleInLayerSwitcher: true,
        type: 'base',
        visible: false,
        source: new ol.source.TileWMS({
          hidpi: false,
          serverType: 'geoserver',
          wrapX: false,
          crossOrigin: 'anonymous'
        })
      });
    
      baseLayerGroup.getLayers().push(emptyBaseLayer);
      baseLayerGroup.getLayers().push(baseLayer);
      baseLayerGroup.getLayers().push(baseLayerHybrid);
      //baseLayerGroup.getLayers().push(ngiLayer);
      //baseLayerGroup.getLayers().push(osmLayer);
    
      //SG Parcel Layer
      var jqxhr = $.ajax({
        type: "GET",
        url: 'https://www.1map.co.za/api/v1/params/layer/1652/?isBaseLayer=false',
        dataType: 'json',
        timeout: 600000, // 10 minutes
        data: {
          token: token
        },
        error: function(xhr, status, error) {
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        },
        success: function(response) {
          if (response && response.apiToken) {
            //token = response.apiToken.token;
          }
          if (response && response.result && response.result.layers) {
            for (var i = 0; i < response.result.layers.length; i++) {
              var item = response.result.layers[i];
              if (item.isBaseLayer == false) {
                var oSource = new ol.source.TileWMS({
                  url: 'https://www.1map.co.za/api/v1/spatial/maptile/' + item.layerId + '/other',
                  params: {
                    'token': token,
                    'CRS': 'EPSG:3857'
                  },
                  hidpi: false,
                  serverType: 'geoserver',
                  wrapX: false,
                  crossOrigin: 'anonymous',
                  attributions: [
                    new ol.Attribution({
                      html: item.attribution
                    })
                  ]
                });
    
                var oLayer = new ol.layer.Tile({
                  title: item.layerCaption,
                  visibleInLayerSwitcher: true,
                  visible: false,
                  minResolution: getResolutionFromScale(item.minScale),
                  maxResolution: getResolutionFromScale(item.maxScale),
                  minScale: item.minScale,
                  maxScale: item.maxScale,
                  source: oSource
                });
    
                otherLayerGroup.getLayers().push(oLayer);
              }
            }
          }
    
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        }
      });
    
      //Nelson Mandela Bay Aerial Imagery
      var jqxhr = $.ajax({
        type: "GET",
        url: 'https://www.1map.co.za/api/v1/params/layer/166/?isBaseLayer=false',
        dataType: 'json',
        timeout: 600000, // 10 minutes
        data: {
          token: token
        },
        error: function(xhr, status, error) {
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        },
        success: function(response) {
          if (response && response.apiToken) {
            //token = response.apiToken.token;
          }
          if (response && response.result && response.result.layers) {
            for (var i = 0; i < response.result.layers.length; i++) {
              var item = response.result.layers[i];
              if (item.isBaseLayer == false) {
                var oSource = new ol.source.TileWMS({
                  url: 'https://www.1map.co.za/api/v1/spatial/maptile/' + item.layerId + '/other',
                  params: {
                    'token': token,
                    'CRS': 'EPSG:3857'
                  },
                  hidpi: false,
                  serverType: 'geoserver',
                  wrapX: false,
                  crossOrigin: 'anonymous',
                  attributions: [
                    new ol.Attribution({
                      html: item.attribution
                    })
                  ]
                });
    
                var oLayer = new ol.layer.Tile({
                  title: item.layerCaption,
                  visibleInLayerSwitcher: true,
                  visible: false,
                  minResolution: getResolutionFromScale(item.minScale),
                  maxResolution: getResolutionFromScale(item.maxScale),
                  minScale: item.minScale,
                  maxScale: item.maxScale,
                  source: oSource
                });
    
                otherLayerGroup.getLayers().push(oLayer);
              }
            }
          }
    
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        }
      });
    
      //Zoning
      var jqxhr = $.ajax({
        type: "GET",
        url: 'https://www.1map.co.za/api/v1/params/layer/59/?isBaseLayer=false',
        dataType: 'json',
        timeout: 600000, // 10 minutes
        data: {
          token: token
        },
        error: function(xhr, status, error) {
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        },
        success: function(response) {
          if (response && response.apiToken) {
            //token = response.apiToken.token;
          }
          if (response && response.result && response.result.layers) {
            for (var i = 0; i < response.result.layers.length; i++) {
              var item = response.result.layers[i];
              if (item.isBaseLayer == false) {
                var oSource = new ol.source.TileWMS({
                  url: 'https://www.1map.co.za/api/v1/spatial/maptile/' + item.layerId + '/other',
                  params: {
                    'token': token,
                    'CRS': 'EPSG:3857'
                  },
                  hidpi: false,
                  serverType: 'geoserver',
                  wrapX: false,
                  crossOrigin: 'anonymous',
                  attributions: [
                    new ol.Attribution({
                      html: item.attribution
                    })
                  ]
                });
    
                var oLayer = new ol.layer.Tile({
                  title: item.layerCaption,
                  visibleInLayerSwitcher: true,
                  visible: false,
                  minResolution: getResolutionFromScale(item.minScale),
                  maxResolution: getResolutionFromScale(item.maxScale),
                  minScale: item.minScale,
                  maxScale: item.maxScale,
                  source: oSource
                });
    
                otherLayerGroup.getLayers().push(oLayer);
              }
            }
          }
    
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        }
      });
    
      //General Plans
      var jqxhr = $.ajax({
        type: "GET",
        url: 'https://www.1map.co.za/api/v1/params/layer/762/?isBaseLayer=false',
        dataType: 'json',
        timeout: 600000, // 10 minutes
        data: {
          token: token
        },
        error: function(xhr, status, error) {
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        },
        success: function(response) {
          if (response && response.apiToken) {
            //token = response.apiToken.token;
          }
          if (response && response.result && response.result.layers) {
            for (var i = 0; i < response.result.layers.length; i++) {
              var item = response.result.layers[i];
              if (item.isBaseLayer == false) {
                var oSource = new ol.source.TileWMS({
                  url: 'https://www.1map.co.za/api/v1/spatial/maptile/' + item.layerId + '/other',
                  params: {
                    'token': token,
                    'CRS': 'EPSG:3857'
                  },
                  hidpi: false,
                  serverType: 'geoserver',
                  wrapX: false,
                  crossOrigin: 'anonymous',
                  attributions: [
                    new ol.Attribution({
                      html: item.attribution
                    })
                  ]
                });
    
                var oLayer = new ol.layer.Tile({
                  title: item.layerCaption,
                  visibleInLayerSwitcher: true,
                  visible: false,
                  minResolution: getResolutionFromScale(item.minScale),
                  maxResolution: getResolutionFromScale(item.maxScale),
                  minScale: item.minScale,
                  maxScale: item.maxScale,
                  source: oSource
                });
    
                otherLayerGroup.getLayers().push(oLayer);
              }
            }
          }
    
          // Lastly add ervenLayer (Highlight Layer)
          otherLayerGroup.getLayers().push(ervenLayer);
        }
      });
    }
    buildLayers = function(){};
    }//end
    
    function getResolutionFromScale(scale) {
    var resolutions = [
      156543.03392804097,
      78271.51696402048,
      39135.75848201024,
      19567.87924100512,
      9783.93962050256,
      4891.96981025128,
      2445.98490512564,
      1222.99245256282,
      611.49622628141,
      305.748113140705,
      152.8740565703525,
      76.43702828517625,
      38.21851414258813,
      19.109257071294063,
      9.554628535647032,
      4.777314267823516,
      2.388657133911758,
      1.194328566955879,
      0.5971642834779395,
      0.29858214173896974,
      0.14929107086948487,
      0.07464553543474244,
      0.03732276771737122,
      0.01866138385868561,
      0.009330691929342804,
      0.004665345964671402,
      0.002332672982335701,
      0.0011663364911678506,
      0.0005831682455839253
    ];
    var zoomlevels = [
      0,
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9,
      10,
      11,
      12,
      13,
      14,
      15,
      16,
      17,
      18,
      19,
      20,
      21,
      22,
      23,
      24,
      25,
      26,
      27,
      28
    ];
    var scales = [
      1048576000,
      524288000,
      131072000,
      65536000,
      32768000,
      16384000,
      8192000,
      4096000,
      2048000,
      1024000,
      512000,
      256000,
      128000,
      64000,
      32000,
      16000,
      8000,
      4000,
      2000,
      1000,
      500,
      250,
      125,
      62.5,
      31.25,
      15.625,
      7.8125,
      3.90625,
      1.953125
    ];
    for (var i = 1; i < scales.length; i++) {
      // As soon as a number bigger than target is found, return the previous or current
      // number depending on which has smaller difference to the target.
      if (scales[i] <= scale) {
        var p = scales[i - 1];
        var c = scales[i];
        return resolutions[Math.abs(p - scale) < Math.abs(c - scale) ? i - 1 : i] + 0.00000000001;
      }
    }
    // No number in array is bigger so return the last.
    return resolutions[resolutions.length - 1];
    }
    </script>