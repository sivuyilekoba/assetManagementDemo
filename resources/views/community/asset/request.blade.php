@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
<style>
.tabs {
  position: relative;
  padding: 50px;
  padding-bottom: 80px;
  width: 100%;
  height: 250px;
  border-radius: 5px;
  min-width: 240px;
}
.tabs input[name=tab-control] {
  display: none;
}
.tabs .content section h2,
.tabs ul li label {
  font-weight: bold;
  font-size: 18px;
  color: #428BFF;
}
.tabs ul {
  list-style-type: none;
  padding-left: 0;
  display: flex;
  flex-direction: row;
  margin-bottom: 10px;
  justify-content: space-between;
  align-items: flex-end;
  flex-wrap: wrap;
}
.tabs ul li {
  box-sizing: border-box;
  flex: 1;
  width: 33.3333333333%;
  padding: 0 10px;
  text-align: center;
}
.tabs ul li label {
  transition: all 0.3s ease-in-out;
  color: #929daf;
  padding: 5px auto;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.tabs ul li label br {
  display: none;
}
.tabs ul li label i {
  fill: #929daf;
  height: 1.2em;
  vertical-align: bottom;
  margin-right: 0.2em;
  transition: all 0.2s ease-in-out;
}
.tabs ul li label:hover, .tabs ul li label:focus, .tabs ul li label:active {
  outline: 0;
  color: #bec5cf;
}
.tabs ul li label:hover i, .tabs ul li label:focus i, .tabs ul li label:active i {
  fill: #bec5cf;
}
.tabs .slider {
  position: relative;
  width: 33.3333333333%;
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}
.tabs .slider .indicator {
  position: relative;
  width: 50px;
  max-width: 100%;
  margin: 0 auto;
  height: 4px;
  background: #428BFF;
  border-radius: 1px;
}
.tabs .content {
  margin-top: 30px;
}
.tabs .content section {
  display: none;
  -webkit-animation-name: content;
          animation-name: content;
  -webkit-animation-direction: normal;
          animation-direction: normal;
  -webkit-animation-duration: 0.3s;
          animation-duration: 0.3s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  line-height: 1.4;
}
.tabs .content section h2 {
  color: #428BFF;
  display: none;
}
.tabs .content section h2::after {
  content: "";
  position: relative;
  display: block;
  width: 30px;
  height: 3px;
  background: #428BFF;
  margin-top: 5px;
  left: 1px;
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
  cursor: default;
  color: #428BFF;
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label i {
  fill: #428BFF;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ .slider {
  transform: translateX(0%);
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ .content > section:nth-child(1) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
  cursor: default;
  color: #428BFF;
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label i {
  fill: #428BFF;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ .slider {
  transform: translateX(100%);
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ .content > section:nth-child(2) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
  cursor: default;
  color: #428BFF;
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label i {
  fill: #428BFF;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ .slider {
  transform: translateX(200%);
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ .content > section:nth-child(3) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
  cursor: default;
  color: #428BFF;
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label i {
  fill: #428BFF;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ .slider {
  transform: translateX(300%);
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ .content > section:nth-child(4) {
  display: block;
}
@-webkit-keyframes content {
  from {
    opacity: 0;
    transform: translateY(5%);
  }
  to {
    opacity: 1;
    transform: translateY(0%);
  }
}
@keyframes content {
  from {
    opacity: 0;
    transform: translateY(5%);
  }
  to {
    opacity: 1;
    transform: translateY(0%);
  }
}
@media (max-width: 1000px) {
  .tabs ul li label {
    white-space: initial;
  }
  .tabs ul li label br {
    display: initial;
  }
  .tabs ul li label i {
    height: 1.5em;
  }
}
@media (max-width: 600px) {
  .tabs ul li label {
    padding: 5px;
    border-radius: 5px;
  }
  .tabs ul li label span {
    display: none;
  }
  .tabs .slider {
    display: none;
  }
  .tabs .content {
    margin-top: 20px;
  }
  .tabs .content section h2 {
    display: block;
  }
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

         <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px;">
                        
                        <h3 style="margin-top:-1px; color:black; float:left">Request for improvement, impairment or disposal <br><small>Change in asset usefull life</small></h3>
                        <a class="btn add" href="/Community/{{$id}}"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                        <br>
                        <br>
                        <br>
                        @include('include.message')
                                        
                        <div class="tabs">
                            <input type="radio" id="tab1" name="tab-control" checked>
                            <input type="radio" id="tab2" name="tab-control">
                            <input type="radio" id="tab3" name="tab-control">  

                            <ul>
                                <li title="Improvement">
                                    <label for="tab1" role="button">
                                        <i class="fa fa-wrench" aria-hidden="true"></i>
                                        <br><span>Improvement</span>
                                    </label>
                                </li>
                                <li title="Impairment">
                                    <label for="tab2" role="button">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <br><span>Impairment</span>
                                    </label>
                                </li>
                                <li title="Disposal">
                                    <label for="tab3" role="button">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        <br><span>Disposal</span>
                                    </label>
                                </li>
                            </ul>
                            
                            <div class="slider"><div class="indicator"></div></div>
                            <div class="content">
                                <section>
                                    <form method="post" action="/FAR/request/create-improvement-request/{{$id}}" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="Community Asset" name="category">
                                        <input type="hidden" value="{{$community[0]->asset_id}}" name="asset_identity_id"> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type" style="color:black"><strong style="color:red">*</strong> Improvement Type</label><br>
                                                <select name="type" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($improvement_type as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('type')
                                                    <p class="help is-danger">{{$errors->first('type')}}</p>
                                                @enderror
                                            </div>

                                            {{-- <div class="form-group">
                                                <label for="subtype" style="color:black"><strong style="color:red">*</strong>  Improvement Sub Type</label><br>
                                                <select name="subtype" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($impairment_sub_type as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('subtype')
                                                    <p class="help is-danger">{{$errors->first('subtype')}}</p>
                                                @enderror
                                            </div> --}}

                                            <div class="form-group">
                                                <label for="date" style="color:black"><strong style="color:red">*</strong> Date</label>
                                                <input type="date" class="form-control" name="date" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('date')
                                                <p class="help is-danger">{{$errors->first('date')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="component" style="color:black"><strong style="color:red">*</strong>  Component</label><br>
                                                <select name="component" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    @foreach($financialType as $d)
                                                        <option value="{{$d->type}}">{{$d->type}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('component')
                                                    <p class="help is-danger">{{$errors->first('component')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="amount" style="color:black"><strong style="color:red">*</strong> Amount</label>
                                                <input type="number" class="form-control" name="amount" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('amount')
                                                <p class="help is-danger">{{$errors->first('amount')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="usefull_life" style="color:black"><strong style="color:red">*</strong> Usefull Life</label>
                                                <input type="number" class="form-control" name="usefull_life" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('usefull_life')
                                                <p class="help is-danger">{{$errors->first('usefull_life')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="usefull_life_remaining" style="color:black"><strong style="color:red">*</strong> Usefull Life Remaining</label>
                                                <input type="number" class="form-control" name="usefull_life_remaining" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('usefull_life_remaining')
                                                <p class="help is-danger">{{$errors->first('usefull_life_remaining')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="cac" style="color:black"><strong style="color:red">*</strong>  Condition Assessment Completed</label><br>
                                                <select name="cac" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
            
                                                @error('cac')
                                                    <p class="help is-danger">{{$errors->first('cac')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="assessment" style="color:black"><strong style="color:red">*</strong>  Select Assessment</label><br>
                                                <select name="assessment" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    @foreach($assessment as $d)
                                                        <option value="{{$d->id}}">{{$d->date_of_assessment}} : {{$d->time_of_assessment}} assess by {{$d->name}} {{$d->surname}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('assessment')
                                                    <p class="help is-danger">{{$errors->first('assessment')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file" style="color:black">Supporting Documents 1</label>
                                                <input type="file" class="form-control" name="file" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file')
                                                <p class="help is-danger">{{$errors->first('file')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file2" style="color:black">Supporting Documents 2</label>
                                                <input type="file" class="form-control" name="file2" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file2')
                                                <p class="help is-danger">{{$errors->first('file2')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file3" style="color:black">Supporting Documents 3</label>
                                                <input type="file" class="form-control" name="file3" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file3')
                                                <p class="help is-danger">{{$errors->first('file3')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file4" style="color:black">Supporting Documents 4</label>
                                                <input type="file" class="form-control" name="file4" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file4')
                                                <p class="help is-danger">{{$errors->first('file4')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file5" style="color:black">Supporting Documents 5</label>
                                                <input type="file" class="form-control" name="file5" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file5')
                                                <p class="help is-danger">{{$errors->first('file5')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description" style="color:black"><strong style="color:red">*</strong> Description</label>
                                                <textarea class="form-control" name="description" rows="5" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;" required></textarea>
                    
                                                @error('description')
                                                <p class="help is-danger">{{$errors->first('description')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                                        </div>
                                    </form>
                                </section>

                                <section>
                                    <form method="post" action="/FAR/request/create-impairment-request/{{$id}}" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="Community Asset" name="category">
                                        <input type="hidden" value="{{$community[0]->asset_id}}" name="asset_identity_id"> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type" style="color:black"><strong style="color:red">*</strong> Improvement Type</label><br>
                                                <select name="type" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($impairment_type as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('type')
                                                    <p class="help is-danger">{{$errors->first('type')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="subtype" style="color:black"><strong style="color:red">*</strong>  Improvement Sub Type</label><br>
                                                <select name="subtype" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($impairment_sub_type as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('subtype')
                                                    <p class="help is-danger">{{$errors->first('subtype')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="date" style="color:black"><strong style="color:red">*</strong> Date</label>
                                                <input type="date" class="form-control" name="date" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('date')
                                                <p class="help is-danger">{{$errors->first('date')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="component" style="color:black"><strong style="color:red">*</strong>  Component</label><br>
                                                <select name="component" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    @foreach($financialType as $d)
                                                        <option value="{{$d->type}}">{{$d->type}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('component')
                                                    <p class="help is-danger">{{$errors->first('component')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="amount" style="color:black"><strong style="color:red">*</strong> Amount</label>
                                                <input type="number" class="form-control" name="amount" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('amount')
                                                <p class="help is-danger">{{$errors->first('amount')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="usefull_life" style="color:black"><strong style="color:red">*</strong> Usefull Life</label>
                                                <input type="number" class="form-control" name="usefull_life" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('usefull_life')
                                                <p class="help is-danger">{{$errors->first('usefull_life')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="usefull_life_remaining" style="color:black"><strong style="color:red">*</strong> Usefull Life Remaining</label>
                                                <input type="number" class="form-control" name="usefull_life_remaining" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('usefull_life_remaining')
                                                <p class="help is-danger">{{$errors->first('usefull_life_remaining')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="cac" style="color:black"><strong style="color:red">*</strong>  Condition Assessment Completed</label><br>
                                                <select name="cac" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
            
                                                @error('cac')
                                                    <p class="help is-danger">{{$errors->first('cac')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="assessment" style="color:black"><strong style="color:red">*</strong>  Select Assessment</label><br>
                                                <select name="assessment" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    @foreach($assessment as $d)
                                                        <option value="{{$d->id}}">{{$d->date_of_assessment}} : {{$d->time_of_assessment}} assess by {{$d->name}} {{$d->surname}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('assessment')
                                                    <p class="help is-danger">{{$errors->first('assessment')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file" style="color:black">Supporting Documents 1</label>
                                                <input type="file" class="form-control" name="file" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file')
                                                <p class="help is-danger">{{$errors->first('file')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file2" style="color:black">Supporting Documents 2</label>
                                                <input type="file" class="form-control" name="file2" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file2')
                                                <p class="help is-danger">{{$errors->first('file2')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file3" style="color:black">Supporting Documents 3</label>
                                                <input type="file" class="form-control" name="file3" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file3')
                                                <p class="help is-danger">{{$errors->first('file3')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file4" style="color:black">Supporting Documents 4</label>
                                                <input type="file" class="form-control" name="file4" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file4')
                                                <p class="help is-danger">{{$errors->first('file4')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file5" style="color:black">Supporting Documents 5</label>
                                                <input type="file" class="form-control" name="file5" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file5')
                                                <p class="help is-danger">{{$errors->first('file5')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description" style="color:black"><strong style="color:red">*</strong> Description</label>
                                                <textarea class="form-control" name="description" rows="5" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;" required></textarea>
                    
                                                @error('description')
                                                <p class="help is-danger">{{$errors->first('description')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                                        </div>
                                    </form>
                                </section>
                                
                                <section>
                                    <form method="post" action="/FAR/request/create-disposal-request/{{$id}}" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="Community Asset" name="category">
                                        <input type="hidden" value="{{$community[0]->asset_id}}" name="asset_identity_id">
                                        <input type="hidden" value="{{$community[0]->a1}}" name="asset_class">
                                        <input type="hidden" value="{{$community[0]->a2}}" name="asset_type"> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type" style="color:black"><strong style="color:red">*</strong> Disposal Type</label><br>
                                                <select name="type" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($disposal_type as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('type')
                                                    <p class="help is-danger">{{$errors->first('type')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="subtype" style="color:black"><strong style="color:red">*</strong>  Disposal Method</label><br>
                                                <select name="subtype" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>  
                                                    @foreach ($disposal_method as $d)
                                                        <option value="{{$d->id}}">{{$d->description}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('subtype')
                                                    <p class="help is-danger">{{$errors->first('subtype')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="date" style="color:black"><strong style="color:red">*</strong> Date</label>
                                                <input type="date" class="form-control" name="date" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
                    
                                                @error('date')
                                                <p class="help is-danger">{{$errors->first('date')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="assessment" style="color:black"><strong style="color:red">*</strong>  Select Assessment</label><br>
                                                <select name="assessment" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" required>
                                                    <option disabled selected>--- Select Option ---</option>
                                                    @foreach($assessment as $d)
                                                        <option value="{{$d->id}}">{{$d->date_of_assessment}} : {{$d->time_of_assessment}} assess by {{$d->name}} {{$d->surname}}</option>
                                                    @endforeach
                                                </select>
            
                                                @error('assessment')
                                                    <p class="help is-danger">{{$errors->first('assessment')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file" style="color:black">Supporting Documents 1</label>
                                                <input type="file" class="form-control" name="file" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file')
                                                <p class="help is-danger">{{$errors->first('file')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file2" style="color:black">Supporting Documents 2</label>
                                                <input type="file" class="form-control" name="file2" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file2')
                                                <p class="help is-danger">{{$errors->first('file2')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file3" style="color:black">Supporting Documents 3</label>
                                                <input type="file" class="form-control" name="file3" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file3')
                                                <p class="help is-danger">{{$errors->first('file3')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file4" style="color:black">Supporting Documents 4</label>
                                                <input type="file" class="form-control" name="file4" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file4')
                                                <p class="help is-danger">{{$errors->first('file4')}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="file5" style="color:black">Supporting Documents 5</label>
                                                <input type="file" class="form-control" name="file5" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;">
                    
                                                @error('file5')
                                                <p class="help is-danger">{{$errors->first('file5')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
