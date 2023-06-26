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
                    
                <h3 style="margin-top:-1px; color:black; float:left">Community Assets</h3>
                <a class="btn add" href="/Community/{{$community[0]->id}}"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                <br>
                <br>
                <br>

                <!--FORM PROCESS STEPS-->
                <div class="col-md-12">                   
                    <div class="row bs-wizard" style="border-bottom:0;">
                        <div id="process1" class="col-xs-4 bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Directorates & Details</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><h2>1</h2></div>
                        </div>
                        
                        <div id="process2" class="col-xs-4 bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Asset Property Data</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><h2>2</h2></div>
                        </div>

                        <div id="process8" class="col-xs-4 bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum" style="color:black">Custodianship</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center"><h2>3</h2></div>
                        </div>
                    </div>
                </div>
       
        	    <!--FORM-->
              <div class="col-md-12">
                  @include('include.message')
                  <div id="warning" class="form-group" style="display:none">
                      <div style="background-color:#A30003; color:white; padding: 15px; border-left: 6px solid #7f7f84; margin-bottom: 10px; -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); border-color: red; border-radius:10px">
                        WARNING: Please fill in all values before continuing.
                      </div>
                  </div>
                  <br>
                  <form method="post" action="{{ route('Community.update', $community[0]->id) }}" enctype="multipart/form-data">
                        @method('PUT') 
                        @csrf

                        <input type="hidden" name="property_id" id="property_id" value="{{$community[0]->id}}" required>

                        <div class="form-group">
                            <!--step 1-->
                            <div id="step1">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="description" style="color:black"><strong style="color:red">*</strong> Description</label>
                                        <input type="text" value="{{$community[0]->description}}" class="form-control" name="description" id="description" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('description')
                                          <p class="help is-danger">{{$errors->first('description')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="asset_id" style="color:black"><strong style="color:red">*</strong> Asset ID</label>
                                        <input type="text" value="{{$community[0]->asset_id}}" class="form-control" name="asset_id" id="asset_id" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('asset_id')
                                          <p class="help is-danger">{{$errors->first('asset_id')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="parent_asset_id" style="color:black">Asset Parent ID</label>
                                        <input type="text" value="{{$community[0]->parent_asset_id}}" class="form-control" name="parent_asset_id" id="parent_asset_id" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.7); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" readonly required>
            
                                        @error('parent_asset_id')
                                          <p class="help is-danger">{{$errors->first('parent_asset_id')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="class" style="color:black"><strong style="color:red">*</strong> Asset Class</label><br>
                                        <select name="class" id="class" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" onChange="changecat(this.value);" required>
                                            <option value="{{$community[0]->aa1}}" selected>{{$community[0]->a1}}</option>
                                            @foreach ($class as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
    
                                        @error('class')
                                            <p class="help is-danger">{{$errors->first('class')}}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="type" style="color:black"><strong style="color:red">*</strong> Asset Type</label><br>
                                        <select name="type" id="type" style="background-color:rgba(0, 0, 0, 0.5); border-color:grey; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px;" required>
                                            <option value="{{$community[0]->aa2}}" selected>{{$community[0]->a2}}</option>
                                        </select>
    
                                        @error('type')
                                            <p class="help is-danger">{{$errors->first('type')}}</p>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <label for="subtype" style="color:black">Asset Sub Type</label>
                                        <select name="subtype" id="subtype" style="background-color:rgba(0, 0, 0, 0.5); border-color:grey; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px;">
                                            <option value="{{$community[0]->subtype}}" selected>{{$community[0]->subtype}}</option>
                                            <option value="Concrete Bollards">Concrete Bollards</option>
                                            <option value="Concrete Berms">Concrete Berms</option>
                                            <option value="Fencing">Fencing</option>
                                            <option value="Playground Equipment">Playground Equipment</option>
                                            <option value="Outdoor Gym Equipment">Outdoor Gym Equipment</option>
                                        </select>
    
                                        @error('subtype')
                                            <p class="help is-danger">{{$errors->first('subtype')}}</p>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <label for="directorate" style="color:black"><strong style="color:red">*</strong> Directorate</label>
                                        <select name="directorate" id="directorate" onChange="changecat2(this.value);" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px">
                                            <option value="{{$community[0]->dd1}}" selected>{{$community[0]->d1}}</option>
                                            @foreach ($dir as $d)
                                                <option value="{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
            
                                        @error('directorate')
                                          <p class="help is-danger">{{$errors->first('directorate')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="sub" style="color:black"><strong style="color:red">*</strong> Sub Directorate</label>
                                        <select name="sub" id="sub" onChange="changecat3(this.value);" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" readonly="readonly" required>
                                            <option value="{{$community[0]->dd2}}" selected>{{$community[0]->d2}}</option>
                                        </select>
            
                                        @error('sub')
                                          <p class="help is-danger">{{$errors->first('sub')}}</p>
                                        @enderror
                                    </div>
        
                                    <div class="form-group">
                                        <label for="department" style="color:black"><strong style="color:red">*</strong> Department</label>
                                        <select name="department" id="department" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" readonly="readonly" required>
                                            <option value="{{$community[0]->dd3}}" selected>{{$community[0]->d3}}</option>
                                        </select>
            
                                        @error('department')
                                          <p class="help is-danger">{{$errors->first('department')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div><!--step 1 end-->
    
                            <div id="step2" style="display:none">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="allotment_township" style="color:black">Allotment</label>
                                        <input type="text" value="{{$community[0]->allotment_township}}" class="form-control" name="allotment_township" id="allotment_township" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('allotment_township')
                                          <p class="help is-danger">{{$errors->first('allotment_township')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="erf_number" style="color:black">Erf Number</label>
                                        <input type="text" value="{{$community[0]->erf_number}}" class="form-control" name="erf_number" id="erf_number" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('erf_number')
                                          <p class="help is-danger">{{$errors->first('erf_number')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="erf_number2" style="color:black">Erf Number 2</label>
                                        <input type="text" value="{{$community[0]->erf_number2}}" class="form-control" name="erf_number2" id="erf_number2" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('erf_number2')
                                          <p class="help is-danger">{{$errors->first('erf_number2')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ward" style="color:black">Ward</label>
                                        <input type="text" value="{{$community[0]->ward}}" class="form-control" name="ward" id="ward" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('ward')
                                          <p class="help is-danger">{{$errors->first('ward')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="portion_number" style="color:black">Portion Number</label>
                                        <input type="text" value="{{$community[0]->portion_number}}" class="form-control" name="portion_number" id="portion_number" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('portion_number')
                                          <p class="help is-danger">{{$errors->first('portion_number')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="complex" style="color:black">Complex</label>
                                        <input type="text" value="{{$community[0]->complex}}" class="form-control" name="complex" id="complex" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('complex')
                                          <p class="help is-danger">{{$errors->first('complex')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="building_name" style="color:black">Building Name</label>
                                        <input type="text" value="{{$community[0]->building_name}}" class="form-control" name="building_name" id="building_name" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('building_name')
                                          <p class="help is-danger">{{$errors->first('building_name')}}</p>
                                        @enderror
                                    </div>  

                                    <div class="form-group">
                                        <label for="serial_number" style="color:black">Ownership Reference, Serial Number</label>
                                        <input type="text" value="{{$community[0]->serial_number}}" class="form-control" name="serial_number" id="serial_number" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('serial_number')
                                          <p class="help is-danger">{{$errors->first('serial_number')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="location" style="color:black"><strong style="color:red">*</strong> Search Address</label>
                                        <input type="text" class="form-control" value="{{$community[0]->street_no}} {{$community[0]->street_name}} {{$community[0]->suburb}} {{$community[0]->city_town}}" name="location" id="location" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('location')
                                          <p class="help is-danger">{{$errors->first('location')}}</p>
                                        @enderror
                                    </div>  

                                    <div class="form-group">
                                        <label for="street_no" style="color:black"><strong style="color:red">*</strong> Street Number</label>
                                        <input type="text" value="{{$community[0]->street_no}}" class="form-control" name="street_no" id="street_no" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('street_no')
                                          <p class="help is-danger">{{$errors->first('street_no')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="street_name" style="color:black"><strong style="color:red">*</strong> Street Name</label>
                                        <input type="text" value="{{$community[0]->street_name}}" class="form-control" name="street_name" id="street_name" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('street_name')
                                          <p class="help is-danger">{{$errors->first('street_name')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="intersection" style="color:black">Street Intersection</label>
                                        <input type="text" value="{{$community[0]->intersection}}" class="form-control" name="intersection" id="intersection" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('intersection')
                                          <p class="help is-danger">{{$errors->first('intersection')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="suburb" style="color:black"><strong style="color:red">*</strong> Suburb</label>
                                        <input type="text" value="{{$community[0]->suburb}}" class="form-control" name="suburb" id="suburb" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('suburb')
                                          <p class="help is-danger">{{$errors->first('suburb')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="city_town" style="color:black"><strong style="color:red">*</strong> Town/ City</label>
                                        <input type="text" value="{{$community[0]->city_town}}" class="form-control" name="city_town" id="city_town" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
            
                                        @error('city_town')
                                          <p class="help is-danger">{{$errors->first('city_town')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="latitude" style="color:black"><strong style="color:red">*</strong> Latitude</label>
                                        <input type="text" value="{{$community[0]->latitude}}" class="form-control" name="latitude" id="latitude" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" readonly required>
            
                                        @error('latitude')
                                          <p class="help is-danger">{{$errors->first('latitude')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="longitude" style="color:black"><strong style="color:red">*</strong> Longitude</label>
                                        <input type="text" value="{{$community[0]->longitude}}" class="form-control" name="longitude" id="longitude" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" readonly required>
            
                                        @error('longitude')
                                          <p class="help is-danger">{{$errors->first('longitude')}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--step 2 end-->

                            <!--step 8-->
                            <div id="step8" style="display:none">
                                <div class="col-md-6">                                                             
                                    <div class="form-group">
                                        <label for="responsible_official" style="color:black">Custodian Responsible Official</label>
                                        <input type="text" value="{{$custodianship[0]->responsible_official}}" class="form-control" name="responsible_official" id="responsible_official" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('responsible_official')
                                          <p class="help is-danger">{{$errors->first('responsible_official')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="custodian_email" style="color:black">Custodian Email</label>
                                        <input type="text" value="{{$custodianship[0]->custodian_email}}" class="form-control" name="custodian_email" id="custodian_email" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('custodian_email')
                                          <p class="help is-danger">{{$errors->first('custodian_email')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="custodian_contact_number" style="color:black">Custodian Contact Number</label>
                                        <input type="text" value="{{$custodianship[0]->custodian_contact_number}}" class="form-control" name="custodian_contact_number" id="custodian_contact_number" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('custodian_contact_number')
                                          <p class="help is-danger">{{$errors->first('custodian_contact_number')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="capital_accountant_name" style="color:black">Capital Accountant Name</label>
                                        <input type="text" value="{{$custodianship[0]->capital_accountant_name}}" class="form-control" name="capital_accountant_name" id="capital_accountant_name" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('capital_accountant_name')
                                          <p class="help is-danger">{{$errors->first('capital_accountant_name')}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label for="capital_accountant_email" style="color:black">Capital Accountant Email</label>
                                        <input type="text" value="{{$custodianship[0]->capital_accountant_email}}" class="form-control" name="capital_accountant_email" id="capital_accountant_email" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('capital_accountant_email')
                                          <p class="help is-danger">{{$errors->first('capital_accountant_email')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="operating_accountant_name" style="color:black">Operating Accountant Name</label>
                                        <input type="text" value="{{$custodianship[0]->operating_accountant_name}}" class="form-control" name="operating_accountant_name" id="operating_accountant_name" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('operating_accountant_name')
                                          <p class="help is-danger">{{$errors->first('operating_accountant_name')}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="operating_accountant_email" style="color:black">Operating Accountant Email</label>
                                        <input type="text" value="{{$custodianship[0]->operating_accountant_email}}" class="form-control" name="operating_accountant_email" id="operating_accountant_email" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
            
                                        @error('operating_accountant_email')
                                          <p class="help is-danger">{{$errors->first('operating_accountant_email')}}</p>
                                        @enderror
                                    </div>                                
                                </div>
                            </div><!--step 8 end-->
                          
                            <div id="pn1" class="col-md-12">
                                <a class="btn add" style="float:right" onclick="step2()">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                              
                            <div id="pn2" style="display:none" class="col-md-12">
                                <a class="btn add" style="float:right" onclick="step8()">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <a class="btn add" onclick="step1()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</a>
                            </div>
    
                            <div id="pn8" style="display:none" class="col-md-12">
                              <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                              <a class="btn add" onclick="step2()" style="margin-right:15px"><i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</a>
                            </div>

                        </div>
                      {{ csrf_field() }}
                  </form>
                    
                </div>
                    
                </div>
                </div>
                
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZLpNTGL_rjmnidsdBb38iD1wjNFAimUo&libraries=places"></script>
<script>
    $(document).ready(function () 
    {
        initialize();
    });

    function initialize() 
    {
        var options = {
            //types: ['(cities)'],
            componentRestrictions: {country: "za"}
        };

        var input = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(input, options);

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('city_town').value = place.name;
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
            console.log(place);
        });
    }
</script>

<!--MODEL-->
<script>
  var getArrayFromPHP = @json($type);
  var getArrayFromPHP2 = @json($sub);
  var getArrayFromPHP3 = @json($dep);

  function changecat(value) {
      if (value.length == 0) 
        document.getElementById("type").innerHTML = "<option></option>";
      else 
      {
          var catOptions = "";
          var i;
          for (i = 0; i < getArrayFromPHP.length; i++) {
              if(getArrayFromPHP[i].class_id == value)
              {
                catOptions += "<option value='"+ getArrayFromPHP[i].id +"'>" + getArrayFromPHP[i].name + "</option>";
              }
          }
          document.getElementById("type").innerHTML = catOptions;
          document.getElementById("type").removeAttribute('readonly');
          document.getElementById("type").style.borderColor = "#D4AC0A";
      }
  }

  function changecat2(value) {
      if (value.length == 0) 
        document.getElementById("sub").innerHTML = "<option></option>";
      else 
      {
          var catOptions = "<option disabled selected value> -- select an option -- </option>";
          var i;
          for (i = 0; i < getArrayFromPHP2.length; i++) {
              if(getArrayFromPHP2[i].directorate_id == value)
              {
                catOptions += "<option value='"+ getArrayFromPHP2[i].id +"'>" + getArrayFromPHP2[i].name + "</option>";
              }
          }
          document.getElementById("sub").innerHTML = catOptions;
          document.getElementById("sub").removeAttribute('readonly');
          document.getElementById("sub").style.borderColor = "#D4AC0A";
      }
  }

  function changecat3(value) {
      if (value.length == 0) 
        document.getElementById("department").innerHTML = "<option></option>";
      else 
      {
          var catOptions = "<option disabled selected value> -- select an option -- </option>";
          var i;
          for (i = 0; i < getArrayFromPHP3.length; i++) {
              if(getArrayFromPHP3[i].sub_directorate_id == value)
              {
                catOptions += "<option value='"+ getArrayFromPHP3[i].id +"'>" + getArrayFromPHP3[i].name + "</option>";
              }
          }
          document.getElementById("department").innerHTML = catOptions;
          document.getElementById("department").removeAttribute('readonly');
          document.getElementById("department").style.borderColor = "#D4AC0A";
      }
  }
</script>
   
<script>
    function step1() {
        document.getElementById("step1").style.display = "inherit";
        document.getElementById("step2").style.display = "none";
        document.getElementById("step8").style.display = "none";
        
        document.getElementById("pn1").style.display = "inherit";
        document.getElementById("pn2").style.display = "none";
        document.getElementById("pn8").style.display = "none";
        
        document.getElementById("process1").className = "col-xs-4 bs-wizard-step active";
        document.getElementById("process2").className = "col-xs-4 bs-wizard-step disabled";
        document.getElementById("process8").className = "col-xs-4 bs-wizard-step disabled";
    }
    
    function step2() {
        document.getElementById("step1").style.display = "none";
        document.getElementById("step2").style.display = "inherit";
        document.getElementById("step8").style.display = "none";
        
        document.getElementById("pn1").style.display = "none";
        document.getElementById("pn2").style.display = "inherit";
        document.getElementById("pn8").style.display = "none";
        
        document.getElementById("process1").className = "col-xs-4 bs-wizard-step complete";
        document.getElementById("process2").className = "col-xs-4 bs-wizard-step active";
        document.getElementById("process8").className = "col-xs-4 bs-wizard-step disabled";
    }
    
    function step8() {
        document.getElementById("step1").style.display = "none";
        document.getElementById("step2").style.display = "none";
        document.getElementById("step8").style.display = "inherit";
        
        document.getElementById("pn1").style.display = "none";
        document.getElementById("pn2").style.display = "none";
        document.getElementById("pn8").style.display = "inherit";
        
        document.getElementById("done").style.display = "inherit";
        
        document.getElementById("process1").className = "col-xs-4 bs-wizard-step complete";
        document.getElementById("process2").className = "col-xs-4 bs-wizard-step complete";
        document.getElementById("process8").className = "col-xs-4 bs-wizard-step active";
    
        document.getElementById("warning").style.display = "none";
    }
</script>
        
        </section><!-- /.content -->

</div><!-- /.content-wrapper -->
@endsection
