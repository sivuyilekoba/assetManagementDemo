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
                    
                <h3 style="margin-top:-1px; color:black; float:left">Add Assessors</h3>
                <a class="btn add" href="/CommunityAssessor"><strong><i class="fa fa-arrow-left"></i>  Go to Manage Assessors</strong></a>
                <br>
                <br>
                <br>
       
        	    <!--FORM-->
              <div class="col-md-12">
                  @include('include.message')
                  <br>
                  <form method="post" action="{{ route('CommunityAssessor.store') }}" enctype="multipart/form-data">
                      @csrf  
                      <div class="form-group">
                      <!--step 1-->
                      <div id="step1">
                          
                          <div class="col-md-6">
                          <div class="form-group">
                            <label for="name" style="color:black"><strong style="color:red">*</strong> Name</label>
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('name')
                              <p class="help is-danger">{{$errors->first('name')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="surname" style="color:black"><strong style="color:red">*</strong> Surname</label>
                            <input type="text" class="form-control" name="surname" id="surname" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('surname')
                              <p class="help is-danger">{{$errors->first('surname')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="id" style="color:black"><strong style="color:red">*</strong> Employee ID</label>
                            <input type="text" class="form-control" name="id" id="id" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('id')
                              <p class="help is-danger">{{$errors->first('id')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="identity" style="color:black"><strong style="color:red">*</strong> ID Number</label>
                            <input type="text" class="form-control" name="identity" id="identity" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('identity')
                              <p class="help is-danger">{{$errors->first('identity')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="email" style="color:black"><strong style="color:red">*</strong> Email</label> <span id="error_email" style="margin-left:20px"></span>
                            <input type="email" class="form-control" name="email" id="email" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('email')
                              <p class="help is-danger">{{$errors->first('email')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="cell" style="color:black">* Cell</label>
                            <input type="text" class="form-control" name="cell" id="cell" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                            @error('cell')
                              <p class="help is-danger">{{$errors->first('cell')}}</p>
                            @enderror
                          </div>

                          <div class="form-group">
                              <label for="name" style="color:black"><strong style="color:red">*</strong> Password <span style=" font-weight: normal; color: black; font-style: italic;">(Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters)</span></label>
                              <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;" placeholder="Password" required>

                              @error('password')
                                  <p class="help is-danger">{{$errors->first('password')}}</p>
                              @enderror
                          </div>

                          <div class="form-group">
                              <label for="name" style="color:black"><strong style="color:red">*</strong> Confirm Password </label>
                              <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;" placeholder="Confirm Password" required>

                              @error('password_confirmation')
                                  <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                              @enderror
                          </div>

                          </div>
                          
                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="tel" style="color:black"><strong style="color:red">*</strong> Tel</label>
                              <input type="text" class="form-control" name="tel" id="tel" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
  
                              @error('tel')
                                <p class="help is-danger">{{$errors->first('tel')}}</p>
                              @enderror
                            </div>

                            <div class="form-group">
                                <label for="title" style="color:black"><strong style="color:red">*</strong> Job Title</label>
                                <input type="text" class="form-control" name="title" id="title" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>

                                @error('title')
                                <p class="help is-danger">{{$errors->first('title')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bio" style="color:black">Bio</label>
                                <textarea type="text" class="form-control" name="bio" rows="5" cols="50" id="bio" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; "></textarea>

                                @error('bio')
                                <p class="help is-danger">{{$errors->first('bio')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="file" style="color:black"><strong style="color:red">*</strong> Upload PNG Image  [Get png from <a href="https://www.flaticon.com/">flaticon.com</a>]</label>
                                <input type="file" class="form-control" name="file" id="file" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; height:35px;" required>
    
                                @error('file')
                                  <p class="help is-danger">{{$errors->first('file')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="file2" style="color:black"> Qualifications</label>
                                <input type="file" class="form-control" name="file2[]" id="file2" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white;" placeholder="Qualifications" multiple>
                                
                                @error('file2')
                                    <p class="help is-danger">{{$errors->first('file2')}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="directorate" style="color:black"><strong style="color:red">*</strong> Directorate</label>
                                <select name="directorate" id="directorate" onChange="changecat2(this.value);" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px">
                                    <option disabled selected value> -- select an option -- </option>
                                    @foreach ($directorate as $d)
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

                                </select>
    
                                @error('sub')
                                  <p class="help is-danger">{{$errors->first('sub')}}</p>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="department" style="color:black">Department</label>
                                <select name="department" id="department" autocomplete="off" style="background-color:rgba(0, 0, 0, 0.5); border:none; border-radius:5px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); color:white; width:100%; height:35px" readonly="readonly">
                                  
                                </select>
    
                                @error('department')
                                  <p class="help is-danger">{{$errors->first('department')}}</p>
                                @enderror
                              </div>
                          
                          </div>
                          </div><!--step 1 end-->
                          
                            <button name="register" id="register" type="submit" value="submit" class="btn btn-success" style="float:right; margin-top:-4px"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>


                        </div>
                      {{ csrf_field() }}
                  </form>
                    
                </div>
                    
                </div>
                </div>
                
            </div>   
        
        </section><!-- /.content -->

<script>
    var getArrayFromPHP2 = @json($sub);
    var getArrayFromPHP3 = @json($department);
  
    function changecat2(value) {
        if (value.length == 0) document.getElementById("sub").innerHTML = "<option></option>";
        else {
            var catOptions = "<option disabled selected value> -- select an option -- </option>";
            var i;
            for (i = 0; i < getArrayFromPHP2.length; i++) {
                if(getArrayFromPHP2[i].directorate_id == value){
                catOptions += "<option value='"+ getArrayFromPHP2[i].id +"'>" + getArrayFromPHP2[i].name + "</option>";
                }
            }
            document.getElementById("sub").innerHTML = catOptions;
            document.getElementById("sub").removeAttribute('readonly');
            document.getElementById("sub").style.borderColor = "#D4AC0A";
        }
    }
  
    function changecat3(value) {
        if (value.length == 0) document.getElementById("department").innerHTML = "<option></option>";
        else {
            var catOptions = "<option disabled selected value> -- select an option -- </option>";
            var i;
            for (i = 0; i < getArrayFromPHP3.length; i++) {
                if(getArrayFromPHP3[i].sub_directorate_id == value){
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
  $(document).ready(function(){
  
   $('#email').blur(function(){
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(email))
    {    
     $('#error_email').html('<label class="text-danger">Invalid Email</label>');
     $('#email').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
    }
    else
    {
     $.ajax({
      url:"{{ route('email_available.check') }}",
      method:"POST",
      data:{email:email, _token:_token},
      success:function(result)
      {
       if(result == 'unique')
       {
        $('#error_email').html('<label class="text-success">Email Available</label>');
        $('#email').removeClass('has-error');
        $('#register').attr('disabled', false);
       }
       else
       {
        $('#error_email').html('<label class="text-danger">Email not Available</label>');
        $('#email').addClass('has-error');
        $('#register').attr('disabled', 'disabled');
       }
      }
     })
    }
   });
   
  });
  </script>

</div><!-- /.content-wrapper -->
@endsection
