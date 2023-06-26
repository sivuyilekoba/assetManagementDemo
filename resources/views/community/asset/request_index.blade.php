
@extends('layouts.community.app')

@section('content')
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
                    
                <h3 style="margin-top:-1px; color:black; float:left">Manage Community Asset Requests</h3>
                <br>
                <br>
                <br>
                <br>
                @include('include.message')
                    
        	    <!--FORM-->
                <div class="col-md-12">

                    <table id="example" class="display stripe" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 15%">Type</th>
                                <th style="width: 20%">Asset ID</th>
                                <th style="width: 15%">User</th>
                                <th style="width: 15%">Status</th>
                                <th style="width: 15%">Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>                       
                    </table> 
                    
                </div>
                  
                </div> 
                </div>
                
            </div>      
            <br>
        
        </section><!-- /.content -->

</div><!-- /.content-wrapper -->

<script>
    $(document).ready( function () {
        $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('Community.yajra.request') !!}',
            columns: [
                { data: 'type', name: 'primary_id' },
                { data: 'asset_identity_id', name: 'asset_identity_id' },
                { data: 'fullname', name: 'fullname' },
                { data: 'status', name: 'status' },
                { data: 'dd', name: 'dd' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "order": [],
            initComplete: function () {
                var r = $('#example tfoot tr');
                $('#example thead').append(r);
                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                    .on('change', function () {
                        column.search($(this).val(), false, false, true).draw();
                    });
                });
            }
        });
    });
</script>
@endsection
