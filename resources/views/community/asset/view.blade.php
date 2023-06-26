@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.2.0/ol.css">
<link rel="stylesheet" type="text/css" href="https://www.1map.co.za/jsmap/assets/js/ol3-layerswitcher.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/4.2.0/ol-debug.js"></script>
<style>
.map {
  height: 400px;
  width: 100%;
  background: url(https://www.1map.co.za/images/map-background.jpg) repeat;
}

.ol-attribution {
  max-width: calc(100% - 3em);
}

.ol-control button,
.ol-attribution,
.ol-scale-line-inner {
  font-family: 'Lucida Grande', Verdana, Geneva, Lucida, Arial, Helvetica, sans-serif;
}

#tags {
  display: none;
}

.navbar-inverse .navbar-inner {
  background: #1F6B75;
}

.navbar-inverse .brand {
  color: white;
  padding: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

label,
input,
button,
select,
textarea {
  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
}

label,
select,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
input[type="radio"],
input[type="checkbox"] {
  cursor: pointer;
}

input,
textarea,
.uneditable-input {
  width: 225px;
}

input,
button,
select,
textarea {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  background-color: #fff;
  border: 1px solid #ccc;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -moz-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  display: inline-block;
  height: 30px;
  padding: 4px 6px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 30px;
  color: #555;
  vertical-align: middle;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.ol-popup {
  position: absolute;
  background-color: white;
  -webkit-filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
  filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
  padding: 15px;
  border-radius: 10px;
  border: 1px solid #cccccc;
  bottom: 12px;
  left: -2000px;
  min-width: 280px;
}

.ol-popup:after,
.ol-popup:before {
  top: 100%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.ol-popup:after {
  border-top-color: white;
  border-width: 10px;
  left: 48px;
  margin-left: -10px;
}

.ol-popup:before {
  border-top-color: #cccccc;
  border-width: 11px;
  left: 48px;
  margin-left: -11px;
}

.ol-popup-closer {
  text-decoration: none;
  position: absolute;
  top: 2px;
  right: 8px;
}

.ol-popup-closer:after {
  content: "✖";
}

.ol-attribution ul {
  font-size: 1rem;
}
</style>
<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px;">
        <section class="content-header">
            <h1 style="color:black">
                <strong>Community Assets</strong>
                <small>Dashboard</small>
            </h1>
        </section>
        <br>

        @php
            $make = "/images/nmbm_logo.png";
        @endphp

         <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px;">
                        
                        <h3 style="margin-top:-1px; color:black; float:left">Community Assets Details</h3>
                        <a class="btn add" href="/Community"><strong><i class="fa fa-arrow-left"></i>  Asset Management</strong></a>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!--TABS========================================-->  
                        <div class="col-md-12">
                            <div style="float:right">
                                <a class="btn btn-info" id="t1" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0; background-color:#A42420; border-color:#A42420;" onclick="tab1()"><strong>
                                    Specification</strong>
                                </a>
                                <font style="visibility: hidden;">sd</font>
                                
                                <a class="btn btn-info" id="t2" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0;" onclick="tab2()"><strong>Assessments</strong>
                                </a>
                                <font style="visibility: hidden;">sd</font>
                                
                                <a class="btn btn-info" id="t3" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0;" onclick="tab3()"><strong>Map</strong>
                                </a>
                                <font style="visibility: hidden;">sd</font>
                                
                                <a class="btn btn-info" id="t4" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0;" onclick="tab4()"><strong>Value Chart</strong>
                                </a>
                                <font style="visibility: hidden;">sd</font>

                                <a class="btn btn-info" id="t5" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0;" onclick="tab5()"><strong>Audit Trail</strong>
                                </a>
                                <font style="visibility: hidden;">sd</font>

                                <a class="btn btn-info" id="t6" style="margin-right:10px; height:50px; width:120px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0;" onclick="tab6()"><strong>Request</strong>
                                </a>
                            </div>
                        </div> 
                        <br>

                        <!--PHOTO========================================-->  
                        <div class="col-md-3">
                            @isset($img[0]->img)
                                <img src="{{$img[0]->img}}" onError="this.onerror=null;this.src='/images/fleet/make/nmbm.png';" alt="error" style="width:100%; border: 1px solid #555;">
                            @else
                                <img src="/images/fleet/make/nmbm.png" alt="error" style="width:100%;">
                            @endisset
                            <hr style="border-color:black">
                            <p style="color:black"><strong>Description: </strong>{{$community[0]->description}}</p>
                            <p style="color:black"><strong>Asset ID: </strong>{{$community[0]->asset_id}}</p>
                        </div> 

                        <!--INFO========================================-->  
                        <div class="col-md-9" id="d1" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%;">
                            @include('community.asset.includes.details')                                                                                  
                        </div>

                        <!--Assessment========================================-->  
                        <div class="col-md-9" id="d2" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                            @include('community.asset.includes.assessment')                            
                        </div>

                        <!--Map========================================-->  
                        <div class="col-md-9" id="d3" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                            @include('community.asset.includes.map')                            
                        </div>

                        <!--Value Charts========================================-->  
                        <div class="col-md-9" id="d4" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                            @include('community.asset.includes.value_chart')
                        </div>

                        <!--Audit Trail========================================-->  
                        <div class="col-md-9" id="d5" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                            @include('community.asset.includes.audit')                          
                        </div>

                        <!--Request========================================-->  
                        <div class="col-md-9" id="d6" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
                            backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                            @include('community.asset.includes.request')                          
                        </div>
                    
                    <!-- /.=============================== -->
                    </div>
                </div>  
            </div>      
            <br>
        
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@include('community.asset.includes.modal')
@include('community.asset.includes.js')
@include('community.asset.includes.1map')
@endsection
