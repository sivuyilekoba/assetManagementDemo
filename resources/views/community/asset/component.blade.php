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
                    
                <h3 style="margin-top:-1px; color:black; float:left">{{$financial[0]->type}} Components Edit</h3>
                <a class="btn add" href="/Community/{{$financial[0]->property_id}}"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                <br>
                <br>
                <br>
       
        	    <!--FORM-->
              <div class="col-md-12">
                  @include('include.message')
                  <div id="warning" class="form-group" style="display:none">
                      <div style="background-color:#A30003; color:white; padding: 15px; border-left: 6px solid #7f7f84; margin-bottom: 10px; -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); box-shadow: 0 5px 8px -6px rgba(0,0,0,.2); border-color: red; border-radius:10px">
                        WARNING: Please fill in all values before continuing.
                      </div>
                  </div>
                  <br>
                  <form method="post" action="{{ route('Community.componentUpdate', $financial[0]->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">                                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="component" style="color:black"><strong style="color:red">*</strong> Component Asset ID</label>
                                <input type="text" value="{{$financial[0]->component_asset_id}}" class="form-control" name="component" id="component" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('component')
                                    <p class="help is-danger">{{$errors->first('component')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="date_in_use" style="color:black"><strong style="color:red">*</strong> Date in Use</label>
                                <input type="date" value="{{$financial[0]->date_in_use}}" class="form-control" name="date_in_use" id="date_in_use" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('date_in_use')
                                    <p class="help is-danger">{{$errors->first('date_in_use')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="year_in_use" style="color:black"><strong style="color:red">*</strong> Year in Use</label>
                                <input type="text" value="{{$financial[0]->year_in_use}}" class="form-control" name="year_in_use" id="year_in_use" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('year_in_use')
                                    <p class="help is-danger">{{$errors->first('year_in_use')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="asset_life" style="color:black"><strong style="color:red">*</strong> Asset Life (Months)</label>
                                <input type="text" value="{{$financial[0]->asset_life}}" class="form-control" name="asset_life" id="asset_life" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('asset_life')
                                    <p class="help is-danger">{{$errors->first('asset_life')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="remaining_life" style="color:black"><strong style="color:red">*</strong> Remaining Life(Months)</label>
                                <input type="text" value="{{$financial[0]->remaining_life}}" class="form-control" name="remaining_life" id="remaining_life" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('remaining_life')
                                    <p class="help is-danger">{{$errors->first('remaining_life')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="prior_life" style="color:black"><strong style="color:red">*</strong> PRIOR Remaining Life (Months)</label>
                                <input type="text" value="{{$financial[0]->prior_life}}" class="form-control" name="prior_life" id="prior_life" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('prior_life')
                                    <p class="help is-danger">{{$errors->first('prior_life')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="life_diff" style="color:black"><strong style="color:red">*</strong> Remaining Life Diff</label>
                                <input type="text" value="{{$financial[0]->life_diff}}" class="form-control" name="life_diff" id="life_diff" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('life_diff')
                                    <p class="help is-danger">{{$errors->first('life_diff')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="total_cost_prior_years" style="color:black"><strong style="color:red">*</strong> Total Cost Prior Years</label>
                                <input type="text" value="{{$financial[0]->total_cost_prior_years}}" class="form-control" name="total_cost_prior_years" id="total_cost_prior_years" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('total_cost_prior_years')
                                    <p class="help is-danger">{{$errors->first('total_cost_prior_years')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="total_current_year" style="color:black"><strong style="color:red">*</strong> Write Out Total Current Year</label>
                                <input type="text" value="{{$financial[0]->total_current_year}}" class="form-control" name="total_current_year" id="total_current_year" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('total_current_year')
                                    <p class="help is-danger">{{$errors->first('total_current_year')}}</p>
                                @enderror
                            </div>                            
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="costing_total_current_year" style="color:black"><strong style="color:red">*</strong> Costing Total Current Year</label>
                                <input type="text" value="{{$financial[0]->costing_total_current_year}}" class="form-control" name="costing_total_current_year" id="costing_total_current_year" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('costing_total_current_year')
                                    <p class="help is-danger">{{$errors->first('costing_total_current_year')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="total_cost" style="color:black"><strong style="color:red">*</strong> Total Cost (All Years)</label>
                                <input type="text" value="{{$financial[0]->total_cost}}" class="form-control" name="total_cost" id="total_cost" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('total_cost')
                                    <p class="help is-danger">{{$errors->first('total_cost')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="accumulated_depreciation" style="color:black"><strong style="color:red">*</strong> Accumulated Depreciation Total Prior Years</label>
                                <input type="text" value="{{$financial[0]->accumulated_depreciation}}" class="form-control" name="accumulated_depreciation" id="accumulated_depreciation" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('accumulated_depreciation')
                                    <p class="help is-danger">{{$errors->first('accumulated_depreciation')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="depreciation_total_prior" style="color:black"><strong style="color:red">*</strong> Depreciation Total Prior Year Cost</label>
                                <input type="text" value="{{$financial[0]->depreciation_total_prior}}" class="form-control" name="depreciation_total_prior" id="depreciation_total_prior" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('depreciation_total_prior')
                                    <p class="help is-danger">{{$errors->first('depreciation_total_prior')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="depreciation_total_additions" style="color:black"><strong style="color:red">*</strong> Depreciation Total Additions</label>
                                <input type="text" value="{{$financial[0]->depreciation_total_additions}}" class="form-control" name="depreciation_total_additions" id="depreciation_total_additions" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('depreciation_total_additions')
                                    <p class="help is-danger">{{$errors->first('depreciation_total_additions')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="depreciation_total" style="color:black"><strong style="color:red">*</strong> Depreciation Total</label>
                                <input type="text" value="{{$financial[0]->depreciation_total}}" class="form-control" name="depreciation_total" id="depreciation_total" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('depreciation_total')
                                    <p class="help is-danger">{{$errors->first('depreciation_total')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="total_accumulated_depreciation" style="color:black"><strong style="color:red">*</strong> Total Accumulated Depreciation</label>
                                <input type="text" value="{{$financial[0]->total_accumulated_depreciation}}" class="form-control" name="total_accumulated_depreciation" id="total_accumulated_depreciation" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('total_accumulated_depreciation')
                                    <p class="help is-danger">{{$errors->first('total_accumulated_depreciation')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="book_value" style="color:black"><strong style="color:red">*</strong> Book Value</label>
                                <input type="text" value="{{$financial[0]->book_value}}" class="form-control" name="book_value" id="book_value" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('book_value')
                                    <p class="help is-danger">{{$errors->first('book_value')}}</p>
                                @enderror
                            </div>
                        </div>

                        <button id="done" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
                    </div>
                  </form>
                    
                </div>
                    
                </div>
                </div>
                
            </div>   
        
        </section><!-- /.content -->

</div><!-- /.content-wrapper -->
@endsection
