@extends('layouts.community.app')

@section('content')

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
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
                <div class="col-md-12">
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                <h3 style="margin-top:-1px; color:black; float:left">Schedule Bulk Assessment</h3>
                <a class="btn add" href="/Community"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                <br>
                <br>
                <br>
       
        	    <!--FORM-->
                <div class="col-md-12">
                    <div class="row bs-wizard" style="border-bottom:0;">
                        
                        <div id="process1" class="col-xs-4 bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Time Frame</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><img src="/images/fleet/icons/clock.png" alt="error" style="width:33px; height:33px;"></div>
                        </div>
                        
                        <div id="process2" class="col-xs-4 bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Assign Assessor</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><img src="/images/fleet/icons/user.png" alt="error" style="width:33px; height:33px;"></div>
                        </div>
                        
                        <div id="process3" class="col-xs-4 bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Finalize</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><img src="/images/fleet/icons/finish.png" alt="error" style="width:33px; height:33px;"></div>
                        </div>
                    </div>
                </div>

                <!--FORM-->
        	    <div class="col-md-1"></div>
                <div class="col-md-10">
                    @include('include.message')
                    <br>
                    <br>
                    <form role="form" method="post" action="{{route('CommunityAssessment.bulked')}}" enctype="multipart/form-data">
                        @csrf  
                        <div class="box-body">
                            <div class="form-group">
                                
                                <div id="warning" class="form-group" style="display:none">
                                    <div style="background-color:#A30003; color:white; padding: 15px; border-left: 6px solid #7f7f84; margin-bottom: 10px; -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); border-color: red; border-radius:10px">
                                    WARNING: Please fill in all values before continuing.
                                    </div>
                                </div>

                                <!--step 1-->
                                <div id="step1">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date" style="color:black">Date of Assessment</label><br>
                                            <input type="date" name="date" id="date" value="<?php $today = date("Y-m-d"); echo $today ?>" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;" required><br>
                                            <script>
                                                var today = new Date().toISOString().split('T')[0];
                                                document.getElementsByName("date")[0].setAttribute('min', today);
                                            </script>
                                            
                                            @error('date')
                                                <p class="help is-danger">{{$errors->first('date')}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="time" style="color:black">Time of Assessment</label><br>
                                            <input id="time" name="time" type="time" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;" required/>
                                            
                                            @error('time')
                                                <p class="help is-danger">{{$errors->first('time')}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </div><!--step 1 end-->

                                <!--step 2-->
                                <div id="step2" style="display:none">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="make" style="color:black">Search Name (Optional)</label><br>
                                            <input type="text" class="form-control" name="search2" id="search2" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="assessor_listbox" style="color:black">Select Assessor</label><br>
                                            <select name="assessor_listbox" id="assessor_listbox" size="15" style="background-color:rgba(0, 0, 0, 0.1); border-color:#950000; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:black; width:100%;" onChange="changecata(this.value);" readonly="readonly" required>
                                                @foreach ($assessor as $a)
                                                    <option value="{{$a->id}}">{{$a->name}} {{$a->surname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    
                                    </div>
                                    
                                    <div id="aa_col6" class="col-md-6 blur" style="">
                                        
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-6">
                                                <img  id="a1" src="/images/fleet/icons/user.png" alt="Avatar" style="border-radius: 50%; height:100px; width:100px; border:7px solid #A42420; float:right">
                                                </div>
                                                <div class="col-md-6">
                                                <div class="card-body">
                                                    <br>
                                                    <h3 class="card-title" style="color:#A42420" id="a2">Empty</h3>
                                                    <p class="card-text" style="color:black" id="a3">Employee id: Empty</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <br>
                                            <canvas id="myChart2" width="600" height="300"></canvas>
                                        <br> --}}
                                        
                                        <br>
                                        <table style="width:100%">
                                        <tbody>
                                            <tr class="tableset">
                                            <td class="tableset2" style="width:30%"><strong>Email:</strong></td>
                                            <td class="tableset2" id="a4"></td>
                                            </tr>
                                            <tr class="tableset">
                                            <td class="tableset2"><strong>Cell:</strong></td>
                                            <td class="tableset2" id="a6"></td>
                                            </tr>
                                            <tr class="tableset">
                                            <td class="tableset2"><strong>Tel:</strong></td>
                                            <td class="tableset2" id="a7"></td>
                                            <tr class="tableset">
                                            <td class="tableset2"><strong>Job Title:</strong></td>
                                            <td class="tableset2" id="a8"></td>
                                            </tr>
                                            <tr class="tableset">
                                            <td class="tableset2" style="vertical-align:top"><strong>Bio:</strong></td>
                                            <td class="tableset2" id="a9"></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div><!--step 2 end-->

                                <!--step 3-->
                                <div id="step3" style="display:none">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comments" style="color:black">Comments</label>
                                            <input type="text" class="form-control" name="comments" id="comments" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;">
                                            
                                            @error('comments')
                                                <p class="help is-danger">{{$errors->first('comments')}}</p>
                                            @enderror
                                        </div>

                                        <br>
                                        <h3>Assets In This Group</h3>
                                        <br>
                                        <table id="example" class="display stripe" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Asset ID</th>
                                                    <th>Description</th>
                                                    <th>Class/Type</th>
                                                    <th>ERF Number</th>
                                                </tr>
                                            </thead>
                                                @foreach($property AS $p)
                                                    <tr class="tableset">
                                                        <td class="tableset2"><input type="checkbox" name="box[]" value="{{$p->id}}" checked/></td>
                                                        <td class="tableset2">{{$p->asset_id}}</td>
                                                        <td class="tableset2">{{$p->description}}</td>
                                                        <td class="tableset2">{{$p->name}}/ {{$p->name2}}</td>
                                                        <td class="tableset2">{{$p->erf_number}}</td>
                                                    </tr>
                                                @endforeach
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--step 3 end-->

                            </div>
                        </div><!-- /.box-body -->

                        <div id="pn1">
                            <!--<a class="btn add" id="prev1" style="display:none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</a>-->
                            <a class="btn add" style="float:right" onclick="step2()">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                           
                        <div id="pn2" style="display:none">
                            <a class="btn add" style="float:right" onclick="step3()">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            <a class="btn add" onclick="step1()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</a>
                        </div>
                           
                        <div id="pn3" style="display:none">
                            <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; display:none; margin-top:-3px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                            <a class="btn add" onclick="step2()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</a>
                        </div>

                        {{ csrf_field() }}
                    </form>

                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#body' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                    
                </div>
                <div class="col-md-1"></div>

                </div>
                </div>
                
            </div>   
        
        </section><!-- /.content -->

         <!--ASSESSOR-->
        <script>
            var getArrayFromPHPa = @json($assessor);
            
            function changecata(value) {
                var catOptionsa = "";
                var i;
                for (i = 0; i <= getArrayFromPHPa.length; i++) {
                    if(getArrayFromPHPa[i].id == value){
                        document.getElementById('aa_col6').className = "col-md-6";
                        if(getArrayFromPHPa[i].profile_pic != "")
                        {
                            document.getElementById('a1').src = getArrayFromPHPa[i].profile_pic;
                        }else
                        {
                            document.getElementById("a1").src = '/images/fleet/icons/noimage.png';
                        }
                        document.getElementById('a2').innerHTML = getArrayFromPHPa[i].name + " " + getArrayFromPHPa[i].surname;
                        document.getElementById('a3').innerHTML = getArrayFromPHPa[i].employee_id;
                        document.getElementById('a4').innerHTML = getArrayFromPHPa[i].email;
                        //document.getElementById('a5').innerHTML = getArrayFromPHPa[i].cell;
                        document.getElementById('a6').innerHTML = getArrayFromPHPa[i].cell;
                        document.getElementById('a7').innerHTML = getArrayFromPHPa[i].tel;
                        document.getElementById('a8').innerHTML = getArrayFromPHPa[i].job_title;
                        document.getElementById('a9').innerHTML = getArrayFromPHPa[i].bio;
                    }
                }
            }
        </script>

        <script>
            function step1() {
                document.getElementById("step1").style.display = "inherit";
                document.getElementById("step2").style.display = "none";
                document.getElementById("step3").style.display = "none";
                
                document.getElementById("pn1").style.display = "inherit";
                document.getElementById("pn2").style.display = "none";
                document.getElementById("pn3").style.display = "none";
                
                document.getElementById("process1").className = "col-xs-4 bs-wizard-step active";
                document.getElementById("process2").className = "col-xs-4 bs-wizard-step disabled";
                document.getElementById("process3").className = "col-xs-4 bs-wizard-step disabled";
            }
            
            function step2() {
                //Check input
                var adate = document.getElementById("date");
                var time = document.getElementById("time");
                
                if ((adate && adate.value)&&(time && time.value)) {
                    document.getElementById("step1").style.display = "none";
                    document.getElementById("step2").style.display = "inherit";
                    document.getElementById("step3").style.display = "none";
                    
                    document.getElementById("pn1").style.display = "none";
                    document.getElementById("pn2").style.display = "inherit";
                    document.getElementById("pn3").style.display = "none";
                    
                    document.getElementById("process1").className = "col-xs-4 bs-wizard-step complete";
                    document.getElementById("process2").className = "col-xs-4 bs-wizard-step active";
                    document.getElementById("process3").className = "col-xs-4 bs-wizard-step disabled";
                    
                    document.getElementById("warning").style.display = "none";
                }else
                {
                    document.getElementById("warning").style.display = "inherit";
                }
            }
            
            function step3() {
               //Check input
                var assessor_listbox = document.getElementById("assessor_listbox");
                
                if ((assessor_listbox && assessor_listbox.value))
                {
                    document.getElementById("step1").style.display = "none";
                    document.getElementById("step2").style.display = "none";
                    document.getElementById("step3").style.display = "inherit";
                    
                    document.getElementById("pn1").style.display = "none";
                    document.getElementById("pn2").style.display = "none";
                    document.getElementById("pn3").style.display = "inherit";
                    
                    document.getElementById("done").style.display = "inherit";
                    
                    document.getElementById("process1").className = "col-xs-4 bs-wizard-step complete";
                    document.getElementById("process2").className = "col-xs-4 bs-wizard-step complete";
                    document.getElementById("process3").className = "col-xs-4 bs-wizard-step complete";
                    
                    document.getElementById("warning").style.display = "none";
                }else
                {
                    document.getElementById("warning").style.display = "inherit";
                }
            }
            
        </script>

</div><!-- /.content-wrapper -->
@endsection
