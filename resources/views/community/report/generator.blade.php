@extends('layouts.community.app')

@section('content')
    <div class="wrapper"
        style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
        <link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

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
                        <div class="col-md-12"
                            style="background-color:rgba(255, 255, 255, .15); padding:15px; 
                box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">

                            <h3 style="margin-top:-1px; color:black; float:left">Community Assets Assessment Report
                                Generator</h3>
                            <br>
                            <br>
                            <br>

                            <!--FORM-->
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- form start -->
                                <form role="form" action="{{ route('CommunityInfo.report') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group" id="d1">
                                        <label for="exampleInputEmail1">Month</label>
                                        <select name="month" id="month" class="form-control">
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sept</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>


                                    <div class="form-group" id="d2">
                                        <label for="exampleInputEmail1">Year</label>
                                        <select name="year" id="year" class="form-control">

                                            <option value="2021">2020/ 2021</option>

                                        </select>
                                    </div>

                                    <div class="form-group" id="d4">
                                        <label for="exampleInputEmail1">Select format</label>
                                        <select name="format" id="format" class="form-control">
                                            <option value="view">View Report</option>
                                            <option value="pdf">PDF</option>
                                        </select>
                                    </div>

                                    <button type="submit" name="one" id="one" value="one"
                                        class="btn btn-primary">Generate Report</button>
                                </form>

                            </div>
                            <!--/.col (left) -->

                        </div>
                    </div>
                    <div class="col-md-2"></div>

                </div>

            </section><!-- /.content -->
            {{-- <script>
    function get(selectObject)
    {
        var value = selectObject.value;
        if(value == "year")  
        {
          document.getElementById("d2").style.display = "inherit";

          document.getElementById("d1").style.display = "none";
          document.getElementById("d4").style.display = "inherit";
          document.getElementById("one").style.display = "inherit";
        }else if(value == "month")
        {
          document.getElementById("d1").style.display = "inherit";
          document.getElementById("d2").style.display = "inherit";
          document.getElementById("d4").style.display = "inherit";
          document.getElementById("one").style.display = "inherit";
        }
    }
</script> --}}

        </div><!-- /.content-wrapper -->
    </div>
@endsection
