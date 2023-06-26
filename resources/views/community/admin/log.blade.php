@extends('layouts.community.app')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

    <div class="wrapper"
        style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
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
                        <div class="col-md-12"
                            style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">

                            <h3 style="margin-top:-1px; color:black; float:left">My Activity Log</h3>
                            <br>
                            <br>
                            <br>

                            <!--FORM-->
                            <div class="col-md-12">

                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                            <tr>
                                                <td>{{ $log->name }} {{ $log->surname }}</td>
                                                <td>{{ $log->email }}</td>
                                                <td>{{ $log->action }}</td>
                                                <td>{{ $log->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <script>
                                    // Setup - add a text input to each footer cell
                                    $(document).ready(function() {
                                        // Setup - add a text input to each footer cell
                                        $('#example thead tr').clone(true).appendTo('#example thead');
                                        $('#example thead tr:eq(1) th').each(function(i) {
                                            var title = $(this).text();
                                            $(this).html('<input type="text" placeholder="Search ' + title + '" />');

                                            $('input', this).on('keyup change', function() {
                                                if (table.column(i).search() != this.value) {
                                                    table
                                                        .column(i)
                                                        .search(this.value)
                                                        .draw();
                                                }
                                            });
                                        });


                                        var table = $('#example').DataTable({
                                            orderCellsTop: true,
                                            fixedHeader: true,
                                            "order": [
                                                [4, "desc"]
                                            ]
                                        });
                                    });
                                </script>


                            </div>

                        </div>
                    </div>

                </div>
                <br>

            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->
    @endsection
