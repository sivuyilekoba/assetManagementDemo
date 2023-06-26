
@extends('layouts.community.app')

@section('content')
{{-- <link rel="stylesheet" href="{{ URL::asset('css/datatable.css') }}"> --}}
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">
<style>
    /* table.dataTable th:nth-child(3),
    table.dataTable th:nth-child(4),
    table.dataTable th:nth-child(5) {
      width: 130px;
      max-width: 130px;
    }
    
    
    table.dataTable td:nth-child(3),
    table.dataTable td:nth-child(4),
    table.dataTable th:nth-child(5) {
      width: 130px;
      max-width: 130px;
    } */
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
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                <h3 style="margin-top:-1px; color:black; float:left">Assessments To Sign</h3>
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
                                <th>Description/ Date-Time</th>
                                <th>Assessor</th>                                
                                <th>SuperIntendent Status</th>
                                <th>Deputy Director Status</th>
                                <th>Director Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assessment as $a)
                            <tr>
                            <td>
                                <font style="font-size:20px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></font> 
                                {{$a->description}} 
                                <br>{{$a->date_of_assessment}} {{$a->time_of_assessment}}
                            </td>                               
                            <td>
                                <span class="label label-success">Signed By {{$a->a1}} {{$a->a2}}</span>                   
                            </td>                           
                            <td>
                                @if($a->superIntendent != '')
                                    <span class="label label-success">Signed By {{$a->superIntendent_fullname}}</span> 
                                @else 
                                    <span class="label label-danger">Not Signed</span>    
                                @endif                                                             
                            </td> 
                            <td>
                                @if($a->deputyDirector != '')
                                    <span class="label label-success">Signed By {{$a->deputyDirector_fullname}}</span> 
                                @else 
                                    <span class="label label-danger">Not Signed</span>    
                                @endif                                                             
                            </td>   
                            <td>
                                @if($a->director != '')
                                    <span class="label label-success">Signed By {{$a->director_fullname}}</span>  
                                @else 
                                    <span class="label label-danger">Not Signed</span>    
                                @endif                                                             
                            </td>                             
                            <td>
                                <a href="/CommunityAssessment/navigator/{{$a->id}}" class="btn btn-primary">View</a>                                    
                            </td>
                            </tr>
                        @endforeach
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
        // Setup - add a text input to each footer cell
        $('#example thead tr').clone(true).appendTo( '#example thead' );
        $('#example thead tr:eq(1) th').each( function (i) {    
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
 
        var table = $('#example').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "order": [[3 , "desc" ]]
        });
    });
</script>
@endsection
