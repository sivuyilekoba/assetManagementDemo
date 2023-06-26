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
                <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; 
                box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">
                    
                    <h3 style="margin-top:-1px; color:black; float:left">Community Assessments Condition Ratings</h3>
                    <br>
                    <br>
                    <br>

                    <div class="b-b b-theme nav-active-theme mb-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item in active"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Condemn</a></li>
                            <li class="nav-item"><a class="nav-link" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false">Major Repairs</a></li>
                            <li class="nav-item"><a class="nav-link" id="menu2-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false">Minor Repairs</a></li>
                            <li class="nav-item"><a class="nav-link" id="menu3-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false">Normal Maintenance</a></li>
                            <li class="nav-item"><a class="nav-link" id="menu4-tab" data-toggle="tab" href="#menu4" role="tab" aria-controls="menu4" aria-selected="false">As New/No Defect</a></li>
                        </ul>
                    </div>  
                    <div class="tab-content mb-4">
                        <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <table id="example" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>Asset ID</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{$d->asset_id}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->date_of_assessment}}</td>
                                            <td>{{$d->name}}</td>
                                            <td><a href="/CommunityAssessment/assessment/{{$d->getid}}" class="btn btn-primary">View Report</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                        <div class="tab-pane fade" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
                            <br>
                            <table id="example2" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>Asset ID</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data2 as $d)
                                        <tr>
                                            <td>{{$d->asset_id}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->date_of_assessment}}</td>
                                            <td>{{$d->name}}</td>
                                            <td><a href="/CommunityAssessment/assessment/{{$d->getid}}" class="btn btn-primary">View Report</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                        <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
                            <br>
                            <table id="example3" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>Asset ID</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data3 as $d)
                                        <tr>
                                            <td>{{$d->asset_id}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->date_of_assessment}}</td>
                                            <td>{{$d->name}}</td>
                                            <td><a href="/CommunityAssessment/assessment/{{$d->getid}}" class="btn btn-primary">View Report</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                        <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="menu3-tab">
                            <br>
                            <table id="example4" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>Asset ID</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data4 as $d)
                                        <tr>
                                            <td>{{$d->asset_id}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->date_of_assessment}}</td>
                                            <td>{{$d->name}}</td>
                                            <td><a href="/CommunityAssessment/assessment/{{$d->getid}}" class="btn btn-primary">View Report</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                        <div class="tab-pane fade" id="menu4" role="tabpanel" aria-labelledby="menu4-tab">
                            <br>
                            <table id="example5" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>Asset ID</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data5 as $d)
                                        <tr>
                                            <td>{{$d->asset_id}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->date_of_assessment}}</td>
                                            <td>{{$d->name}}</td>
                                            <td><a href="/CommunityAssessment/assessment/{{$d->getid}}" class="btn btn-primary">View Report</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                        </div>
                    </div>                                
                </div>
              </div>
            </div> 
        
        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
</div>

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
            "order": [[2 , "desc" ]]
        });
    });
</script>
<script>
    $(document).ready( function () {
        // Setup - add a text input to each footer cell
        $('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
        $('#example2 thead tr:eq(1) th').each( function (i) {
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
 
        var table = $('#example2').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "order": [[2 , "desc" ]]
        });
    });
</script>
<script>
    $(document).ready( function () {
        // Setup - add a text input to each footer cell
        $('#example3 thead tr').clone(true).appendTo( '#example3 thead' );
        $('#example3 thead tr:eq(1) th').each( function (i) {
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
 
        var table = $('#example3').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "order": [[2 , "desc" ]]
        });
    });
</script>
<script>
    $(document).ready( function () {
        // Setup - add a text input to each footer cell
        $('#example4 thead tr').clone(true).appendTo( '#example4 thead' );
        $('#example4 thead tr:eq(1) th').each( function (i) {
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
 
        var table = $('#example4').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "order": [[2 , "desc" ]]
        });
    });
</script>
<script>
    $(document).ready( function () {
        // Setup - add a text input to each footer cell
        $('#example5 thead tr').clone(true).appendTo( '#example5 thead' );
        $('#example5 thead tr:eq(1) th').each( function (i) {
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
 
        var table = $('#example5').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "order": [[2 , "desc" ]]
        });
    });
</script>
@endsection
