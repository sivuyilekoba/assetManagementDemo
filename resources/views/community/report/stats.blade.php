@extends('layouts.community.app')

@section('content')
<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
    <link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
    <style>
        .label-default {
            background-color: #9b59b6;
            color:white
        }
        .label-default[href]:hover,
        .label-default[href]:focus {
            background-color: #8e44ad;
            color:white
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px;">
        <section class="content-header">
            <h1 style="color:black">
              <strong>Community Assets</strong>
              <small>Dashboard</small>
            </h1>
        </section>
        <br>

        <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; 
                box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                    <h3 style="margin-top:-1px; color:black; float:left">
                        @if($id == 1)
                            Overall Average
                        @elseif($id == 2)
                            External Envelope
                        @elseif($id == 3)
                            Civil
                        @elseif($id == 4)
                           Mechanical
                        @elseif($id == 5)
                            Electrical
                        @elseif($id == 6)
                            Soft Service
                        @endif
                         Map Pin
                    </h3>
                    <br>
                    <br>
                    
                    <div class="col-md-12">
                        <select class="" id="dynamic_select">
                            @if($id == 2)
                                <option value="2">External Envelope</option>
                            @elseif($id == 3)
                                <option value="3">Civil</option>
                            @elseif($id == 4)
                                <option value="4">Mechanical</option>
                            @elseif($id == 5)
                                <option value="5">Electrical</option>
                            @elseif($id == 6)
                                <option value="6">Soft Service</option>
                            @endif
                            <option value="1">Overall Average</option>
                            <option value="2">External Envelope</option>
                            <option value="3">Civil</option>
                            <option value="4">Mechanical</option>
                            <option value="5">Electrical</option>
                            <option value="6">Soft Service</option>
                        </select>
                    </div>
                    <script>
                        $(function(){
                          // bind change event to select
                          $('#dynamic_select').on('change', function () {
                              var url = $(this).val(); // get selected value
                              if (url) { // require a URL
                                    var url2 = '{{ route("CommunityInfo.stats", ":id") }}';
                                    url2 = url2.replace(':id', url);
                                    window.location.href = url2;
                              }
                              return false;
                          });
                        });
                    </script>
                    
                    <div class="col-md-12" style="margin-top:20px">
                        <div id="map" style="height: 500px; width: 100%;"></div>
                    </div>
                    
                    <div class="col-md-12" style="margin-top:20px">
                        <span class="label label-danger">Condemn</span>
                        <span class="label label-warning">Major Repairs</span>
                        <span class="label label-default">Minor Repairs</span>
                        <span class="label label-primary">Normal Maintenance</span>
                        <span class="label label-success">As New/No Defect</span>
                    </div> 
                </div>
              </div>
              <div class="col-md-2"></div>

            </div> 
        
        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
</div>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCaRZghksT6n2OwugEn3ip88v8UX1FU_Q8" 
          type="text/javascript"></script>
<script type="text/javascript">
    var locations = [
       @foreach($data as $d)
            ["{{$d->description}} <br> Average:{{$d->average}} <br> <a href='/CommunityAssessment/assessment/{{$d->id}}'>View Report</a>", {{$d->latitude}}, {{$d->longitude}}, {{$d->average}}],
       @endforeach
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.9707209, 25.4849666),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        if (locations[i][3] == 5) { 
            marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
        }else if(locations[i][3] == 4) { 
            marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
        }else if(locations[i][3] == 3) {
            marker.setIcon('http://maps.google.com/mapfiles/ms/icons/purple-dot.png');
        }else if(locations[i][3] == 2) {
            marker.setIcon('http://maps.google.com/mapfiles/ms/icons/orange-dot.png');
        }else{
            marker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
        }

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
            }
        })(marker, i));
    }
  </script>
{{-- <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaRZghksT6n2OwugEn3ip88v8UX1FU_Q8&callback=initMap">
</script> --}}
@endsection
