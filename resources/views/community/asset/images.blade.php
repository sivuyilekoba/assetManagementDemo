@extends('layouts.community.app')

@section('content')
<style>
.item {
    position:relative;
    padding-top:20px;
    display:inline-block;
}
.notify-badge{
    position: absolute;
    right:-20px;
    top:10px;
    background:red;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    padding:5px 10px;
    font-size:20px;
}
</style>
{{-- <link rel="stylesheet" href="{{ URL::asset('css/datatable.css') }}"> --}}
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

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
                        
                        <h3 style="margin-top:-1px; color:black; float:left">Community Assets Images</h3>
                        <a class="btn add" href="/Community/{{$id}}"><i class="fa fa-arrow-left"></i>  Back</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        @include('include.message')
                            
                        <!--FORM-->
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($image AS $i)
                                        <div class="col-md-3">
                                            <div class="item">
                                                <a href="#" class="pop">
                                                    <span class="notify-badge">{{$i->date_of_assessment}}</span>
                                                    <img src="{{$i->img}}"  alt="" style="width:100%"/>
                                                </a>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>      
            <br>

            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">              
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                  </div>
                </div>
            </div>
        
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<script>
    $(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
    });
</script>
@endsection
