@extends('layouts.intangible.app')

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
                    
                <h3 style="margin-top:-1px; color:black; float:left">Assess Assessment</h3>
                <a class="btn add" href="/IntangibleAssessment"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                <br>
                <br>
                <br>

                <!--FORM-->
        	    <div class="col-md-1"></div>
                <div class="col-md-10">
                    @include('include.message')
                    <br>
                    <br>
                    <form role="form" method="post" action="{{ route('IntangibleAssessment.submit', $assessment->id) }}" enctype="multipart/form-data">
                        @csrf  
                        <div class="box-body">
                            <div class="form-group">
                                
                                <div id="warning" class="form-group" style="display:none">
                                    <div style="background-color:#A30003; color:white; padding: 15px; border-left: 6px solid #7f7f84; margin-bottom: 10px; -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); border-color: red; border-radius:10px">
                                    WARNING: Please fill in all values before continuing.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="score1" style="color:black">Select Functional or Non-Functional</label><br>
                                        <select name="score1" id="score1" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;" required>
                                          <option value="Operable/ Functional">Operable/ Functional</option>
                                          <option value="Inoperable/ Non-Functional">Inoperable/ Non-Functional</option>
                                        </select>

                                        @error('score1')
                                            <p class="help is-danger">{{$errors->first('score1')}}</p>
                                        @enderror
                                    </div> 

                                    <div class="form-group">
                                        <label for="aul" style="color:black">Remaining Life (Months)</label><br>
                                        <input type="number" name="aul" id="aul" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;" required>
                                        
                                        @error('aul')
                                            <p class="help is-danger">{{$errors->first('aul')}}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="comment" style="color:black">Comment</label><br>
                                        <textarea name="comment" id="comment" rows="7" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;"></textarea>
                                        
                                        @error('comment')
                                            <p class="help is-danger">{{$errors->first('comment')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file" style="color:black">Upload Screenshot 1 (Optional)</label>
                                        <input type="file" class="form-control" name="file" id="file" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('file')
                                          <p class="help is-danger">{{$errors->first('file')}}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="file2" style="color:black">Upload Screenshot 2 (Optional)</label>
                                        <input type="file" class="form-control" name="file2" id="file2" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('file2')
                                          <p class="help is-danger">{{$errors->first('file2')}}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="file3" style="color:black">Upload Screenshot 3 (Optional)</label>
                                        <input type="file" class="form-control" name="file3" id="file3" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('file3')
                                          <p class="help is-danger">{{$errors->first('file3')}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" id="check" name="check" value="check" required>
                                    <label for="check"> I {{$assessor[0]->name}} {{$assessor[0]->surname}} Agree that all the information provided is filled accurately</label><br>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        
                        <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-3px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>

                        {{ csrf_field() }}
                    </form>
                    
                </div>
                <div class="col-md-1"></div>

                </div>
                </div>
                
            </div>   
        
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
