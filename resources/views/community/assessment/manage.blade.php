@extends('layouts.community.app')

@section('content')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/datatable.css') }}"> --}}
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

                            <h3 style="margin-top:-1px; color:black; float:left">Manage {{ $display }} Assessments</h3>
                            {{-- @if (request()->session()->get('user_type') == 'Admin')
                    <a class="btn add" href="#"><i class="fa fa-plus"></i>  Schedule Assessments</a>
                @endif  --}}
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
                                            <th>Primary ID</th>
                                            <th>Description</th>
                                            <th>Asset ID</th>
                                            <th>Assessor</th>
                                            <th>Date/ Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assessment as $a)
                                            <tr>
                                                <td>
                                                    @php
                                                        $today_date = \Carbon\Carbon::now();
                                                        if ($a->date_of_assessment <= $today_date && $a->done == 1) {
                                                            echo '<font style="font-size:20px;"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></font>';
                                                        } elseif ($a->date_of_assessment < $today_date && $a->done == 0) {
                                                            echo '<font style="font-size:20px;"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;"></i></font>';
                                                        } elseif ($a->date_of_assessment >= $today_date && $a->done == 0) {
                                                            echo '<font style="font-size:20px;"><i class="fa fa-times-circle" aria-hidden="true" style="color:orange;"></i></font>';
                                                        }
                                                    @endphp
                                                    {{ $a->primary_id }}
                                                </td>
                                                <td>{{ $a->description }}</td>
                                                <td>{{ $a->asset_id }}</td>
                                                <td>{{ $a->a1 }} {{ $a->a2 }}</td>
                                                <td>
                                                    {{ $a->date_of_assessment }} {{ $a->time_of_assessment }}

                                                    @php
                                                        $today_date = \Carbon\Carbon::now();
                                                        
                                                        if (
                                                            $a->done != 1 &&
                                                            request()
                                                                ->session()
                                                                ->get('user_type') == 'Admin'
                                                        ) {
                                                            echo '<a href="/CommunityAssessment/edit/' . $a->id . '" style="color:black; font-size:18px; float:right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
                                                        }
                                                    @endphp

                                                </td>
                                                <td>
                                                    <form action="{{ route('CommunityAssessment.destroy', $a->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @if (
                                                            $a->canceled == 'Yes' &&
                                                                request()->session()->get('user_type') == 'Admin')
                                                            @php
                                                                $today_date = \Carbon\Carbon::now();
                                                                
                                                                if (
                                                                    \Carbon\Carbon::parse($a->date_of_assessment) >= $today_date &&
                                                                    $a->done != 1 &&
                                                                    request()
                                                                        ->session()
                                                                        ->get('user_type') == 'Admin'
                                                                ) {
                                                                    echo '<button type="submit" onclick="return confirm(\'Are you sure?\')" class="btn btn-warning">Undo Cancel</button>';
                                                                }
                                                            @endphp
                                                        @else
                                                            @php
                                                                $today_date = \Carbon\Carbon::now();
                                                                
                                                                if (
                                                                    \Carbon\Carbon::parse($a->date_of_assessment) >= $today_date &&
                                                                    $a->done != 1 &&
                                                                    request()
                                                                        ->session()
                                                                        ->get('user_type') == 'Admin'
                                                                ) {
                                                                    echo '<button type="submit" onclick="return confirm(\'Are you sure?\')" class="btn btn-danger" >Cancel</button>';
                                                                }
                                                            @endphp
                                                        @endif

                                                        @if ($display == 'Today' || $display == 'Completed' || $display == 'Incomplete')
                                                            <a href="/CommunityAssessment/progress/{{ $a->id }}"
                                                                class="btn btn-primary">Track Progress</a>
                                                        @endif

                                                        @if ($a->done == 1)
                                                            <a href="/CommunityAssessment/navigator/{{ $a->id }}"
                                                                class="btn btn-primary">View</a>
                                                        @endif
                                                    </form>
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
            $(document).ready(function() {
                // Setup - add a text input to each footer cell
                $('#example thead tr').clone(true).appendTo('#example thead');
                $('#example thead tr:eq(1) th').each(function(i) {
                    var title = $(this).text();
                    $(this).html('<input type="text" placeholder="Search ' + title + '" />');

                    $('input', this).on('keyup change', function() {
                        if (table.column(i).search() !== this.value) {
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
    @endsection
