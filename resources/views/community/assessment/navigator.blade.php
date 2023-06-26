@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/fleetreport.css') }}">

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

        <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                <h3 style="margin-top:-1px; color:black; float:left">Assessment Reports</h3>
                <a class="btn add" href="javascript: history.go(-1)"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                <br>
                <br>
                <br>
                <br>
                    
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            @include('include.message')
                            <br>
                            <br>
                              <!-- small box -->
                                <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4" onclick="assessment()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/assessment.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">View <br/>Assessment</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/assessment.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4" onclick="progress()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/review.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">Assessment <br/>Progress</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/review.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4" onclick="viewreport()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/report.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">View <br/>Report</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/report.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div>
                                                                        
                                        </div>

                                        <br>
                                        <div class="row"> 
                                            <div class="col-md-4" onclick="pdf()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/pdf.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">Download Report<br>in PDF</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/pdf.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div>

                                            {{-- <div class="col-md-4" onclick="img()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/camera.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">Download Report<br/>in JPEG</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/camera.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div> --}}

                                            <div class="col-md-4" onclick="link()">
                                                <div class="container" style="background: #9F221F; height:170px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                                    <center>
                                                        <br>
                                                        <img src="/images/fleet/icons/assessment/bill.png" alt="Pic" class="img-responsive" style="width:50px; height:50px;" />
                                                        <br>
                                                        <br>
                                                        <h4 style=" color: white; top: 10px;">View Custom<br/>Report</h4>
                                                    </center>
                                                <div class="overlay">
                                                    <img src="/images/fleet/icons/assessment/bill.png" alt="Pic" class="text" style="width:50px; height:50px;" />
                                                </div>
                                                </div>
                                            </div>
                                        </div> 

                                        @if((request()->session()->get('UserType') == 'SuperIntendent' || request()->session()->get('UserType') == 'Admin') && $assessment->superIntendent == '' && $assessment->done == 1)
                                            <br>
                                            <br>
                                            <br>
                                            <form method="post" action="{{ route('CommunityAssessment.superIntendent', $assessment->id) }}" enctype="multipart/form-data">
                                                @csrf  
                                                <div class="form-group" style="font-size: 15px">
                                                    <label for="box"><input type="checkbox" id="box" name="box" value="Bike" style="float:left; margin-left:-30px" required> 
                                                        Community Asset SuperIntendent <strong style="color:#5DADE2">{{Auth::user()->name}} {{Auth::user()->surname}}</strong> 
                                                        confirms that the assessment was completed accurately by the relevant assessor and all information is correct to the best of my knowledge.
                                                    </label>
                                                </div>
                                                <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Confirm & Sign</button>
                                            </form>    
                                        @endif

                                        @if((request()->session()->get('UserType') == 'Deputy Director' || request()->session()->get('UserType') == 'Admin') && $assessment->superIntendent != '' && $assessment->deputyDirector == '' && $assessment->done == 1)
                                            <br>
                                            <br>
                                            <br>
                                            <form method="post" action="{{ route('CommunityAssessment.deputyDirector', $assessment->id) }}" enctype="multipart/form-data">
                                                @csrf  
                                                <div class="form-group" style="font-size: 15px">
                                                    <label for="box"><input type="checkbox" id="box" name="box" value="Bike" style="float:left; margin-left:-30px" required> 
                                                        Community Asset Deputy Director <strong style="color:#5DADE2">{{Auth::user()->name}} {{Auth::user()->surname}}</strong> 
                                                        confirms that the assessment was completed accurately by the relevant assessor and all information is correct to the best of my knowledge.
                                                    </label>
                                                </div>
                                                <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Confirm & Sign</button>
                                            </form>    
                                        @endif

                                        @if((request()->session()->get('UserType') == 'Director' || request()->session()->get('UserType') == 'Admin') && $assessment->deputyDirector != '' && $assessment->director == '' && $assessment->done == 1)
                                            <br>
                                            <br>
                                            <br>
                                            <form method="post" action="{{ route('CommunityAssessment.director', $assessment->id) }}" enctype="multipart/form-data">
                                                @csrf  
                                                <div class="form-group" style="font-size: 15px">
                                                    <label for="box"><input type="checkbox" id="box" name="box" value="Bike" style="float:left; margin-left:-30px" required> 
                                                        Community Asset Director <strong style="color:#5DADE2">{{Auth::user()->name}} {{Auth::user()->surname}}</strong> 
                                                        confirms that the assessment was completed accurately by the relevant assessor and all information is correct to the best of my knowledge.
                                                    </label>
                                                </div>
                                                <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Confirm & Sign</button>
                                            </form>    
                                        @endif

                                    </div>
                                <div class="col-md-2"></div>
                            </div><!-- ./col -->
                      </div><!-- /.row -->

<script>
    function assessment()
    {
        window.location.href = "{{route('CommunityAssessment.assessment', $assessment->id)}}";
    }
    function progress()
    {
        window.location.href = "{{route('CommunityAssessment.progress', $assessment->id)}}";
    }
    function viewreport()
    {
        window.location.href = "{{route('CommunityAssessment.view', $assessment->id)}}";
    }
    function pdf()
    {
        window.location.href = "{{route('CommunityAssessment.pdf', $assessment->id)}}";
    }
    function img()
    {
        window.location.href = "{{route('CommunityAssessment.view', $assessment->id)}}";
    }
    function link()
    {
        window.location.href = "https://www.projecttools.co.za/Schools/pages/report2/complete_education_report.php";
    }
</script>
                    
                </div>                
            </div>
        </div>            
    </div>      
    <br>
    
</section><!-- /.content -->

</div><!-- /.content-wrapper -->
@endsection
