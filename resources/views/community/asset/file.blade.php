@extends('layouts.community.app')

@section('content')
{{-- <link rel="stylesheet" href="{{ URL::asset('css/datatable.css') }}"> --}}
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
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
                    
                <h3 style="margin-top:-1px; color:black; float:left">Manage Community Asset Files</h3>
                <a class="btn add" href="/Community/{{$id}}"><i class="fa fa-arrow-left"></i>  Back</a>
                @if(request()->session()->get('UserType') == 'Admin')
                    <a class="btn add" href="/Community/fileAdd/{{$id}}"><i class="fa fa-plus"></i>  Add Files</a>
                @endif
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
                                <th>Description</th>
                                <th>Type</th>
                                <th>File</th>                                
                                <th>Created</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($file as $f)
                                <tr>
                                    <td>{{$f->title}}</td>
                                    <td>{{$f->type}}</td>
                                    <td><a href="{{$f->upload}}"><span class="label label-primary">View</span></a> <a href="{{$f->upload}}" download><span class="label label-success">Download</span></a></td>
                                    <td>{{$f->created}}</td>
                                    <td>{{$f->date}}</td>
                                    <td>
                                        @if(request()->session()->get('UserType') == 'Admin')
                                            <form action="{{ route('Community.fileDestroy', $f->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                <a href="/Community/fileEdit/{{$f->id}}" class="btn btn-primary">Edit</a>
                                                @if($f->deleted != 'Yes')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                                                @else
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary">Undo Delete</button>
                                                @endif
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>                    
                    </table> 
                    
                </div>
                  
                </div>
                </div>
                
            </div>      
            <br>
        
        </section><!-- /.content -->
        <script>
            $(document).ready( function () {
            // Setup - add a text input to each footer cell
            $('#example thead tr').clone(true).appendTo( '#example thead' );
            $('#example thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        
                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() != this.value ) {
                        table
                            .column(i)
                            .search( this.value )
                            .draw();
                    }
                } );
            });
            
            var table = $('#example').DataTable({
                    orderCellsTop: true,
                    fixedHeader: true,
                    "order": [[0, "asc"]]
                });
            });
        </script> 

</div><!-- /.content-wrapper -->

@endsection
