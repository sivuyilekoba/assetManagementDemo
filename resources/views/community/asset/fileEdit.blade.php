@extends('layouts.community.app')

@section('content')

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
    <link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
    <style>

    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px;">
        <section class="content-header">
            <h1 style="color:black">
                <strong>Community Asset</strong>
                <small>Dashboard</small> 
            </h1>
        </section>
        <br>

        <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                <h3 style="margin-top:-1px; color:black; float:left">Edit community Asset File</h3>
                <a class="btn add" href="/Community/file/{{$file[0]->property_id}}"><i class="fa fa-arrow-left"></i>  Back</a>
                <br>
                <br>
                <br>
       
        	    <!--FORM-->
                <div class="col-md-12">
                  @include('include.message')
                  <br>
                  <form method="post" action="{{ route('Community.fileUpdate', $file[0]->id) }}" enctype="multipart/form-data">
                        @csrf  
                        <div class="form-group">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="title" style="color:black"><strong style="color:red">*</strong> Description</label><br>
                                    <input type="text" value="{{$file[0]->title}}" id="title" name="title" class="form-control" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%;" required/>

                                    @error('title')
                                        <p class="help is-danger">{{$errors->first('title')}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="type" style="color:black"><strong style="color:red">*</strong> Type</label>
                                    <select name="type" id="type" style="background-color:rgba(0, 0, 0, 0.5); border-color:grey; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px;" required>   
                                        <option value="Locality Plan">Locality Plan</option>
                                        <option value="Street View Diagram">Street View Diagram</option>
                                        <option value="Surveyor General Diagram">Surveyor General Diagram</option>
                                        <option value="Title Deed">Title Deed</option>
                                        <option value="Valuation Certificate">Valuation Certificate</option>
                                        <option value="Zoning Diagram">Zoning Diagram</option>
                                        <option value="Building Plans">Building Plans</option>
                                        <option value="Site Development Plans">Site Development Plans</option>
                                        <option value="Engineering Certifications">Engineering Certifications</option>
                                        <option value="Occupancy Certificate">Occupancy Certificate</option>
                                        <option value="Amendment Form">Amendment Form</option>
                                    </select>
                                    
                                    @error('type')
                                        <p class="help is-danger">{{$errors->first('type')}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="file" style="color:black"> Upload File</label>
                                    <input type="file" class="form-control" name="file" id="file" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
        
                                    @error('file')
                                      <p class="help is-danger">{{$errors->first('file')}}</p>
                                    @enderror
                                </div>
                                
                                <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                      {{ csrf_field() }}
                  </form>
                    
                </div>
                    
                </div>
                </div>
                
            </div>     
        </section><!-- /.content -->

</div><!-- /.content-wrapper -->
@endsection
