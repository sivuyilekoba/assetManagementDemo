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

                            <h3 style="margin-top:-1px; color:black; float:left">Assessors Details
                                <small>{{ $assessor[0]->name }} {{ $assessor[0]->surname }}</small>
                            </h3>
                            <a class="btn add" href="javascript: history.go(-1)"><i class="fa fa-arrow-left"></i> Back</a>
                            <br>
                            <br>
                            <br>
                            <br>
                            @include('include.message')

                            <!--TABS========================================-->
                            <div class="col-md-12">
                                <div style="float:right">
                                    <a class="btn btn-info" id="t1"
                                        style="margin-right:10px; height:50px; width:150px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0; background-color:#A42420; border-color:#A42420;"
                                        onclick="tab1()"><strong>Edit</strong>
                                    </a>
                                    <font style="visibility: hidden;">sd</font>

                                    <a class="btn btn-info" id="t2"
                                        style="margin-right:10px; height:50px; width:150px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0; "
                                        onclick="tab2()"><strong>History</strong>
                                    </a>
                                    <font style="visibility: hidden;">sd</font>

                                    <a class="btn btn-info" id="t4"
                                        style="margin-right:10px; height:50px; width:150px; margin: 0 auto; padding: 0; line-height: 50px; text-align: center; border-radius:0; "
                                        onclick="tab4()"><strong>Performance</strong>
                                    </a>
                                </div>
                            </div>
                            <br>

                            <!--PHOTO========================================-->
                            <div class="col-md-3">
                                <div class="col-md-12">
                                    <div class="card md-12" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-12">
                                                <center>
                                                    <img src="/{{ $assessor[0]->profile_pic }}" alt="Avatar"
                                                        style="border-radius: 50%; height:150px; width:150px; border:7px solid #A42420;"
                                                        onError="this.onerror=null;this.src='/images/nmbm_logo.png';">
                                                </center>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <center>
                                                    <h3 class="card-title" style="color:black">{{ $assessor[0]->name }}
                                                        {{ $assessor[0]->surname }}</h3>
                                                    <p class="card-text" style="color:black">Employee id:
                                                        {{ $assessor[0]->employee_id }}</p>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--Edit========================================-->
                            <div class="col-md-9" id="d1"
                                style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%;">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <br>
                                        <h2 style="color:black;">Assessor Details</h2>
                                        <br>
                                        <table style="width:100%">
                                            <tbody>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Name:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->name }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Surname:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->surname }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>email:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->email }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Title:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->job_title }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>User Type:</strong></td>
                                                    <td class="tableset2">N/A</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>identity:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->id_number }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Directorate:</strong>
                                                    </td>
                                                    <td class="tableset2"></td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Sub
                                                            Directorate:</strong></td>
                                                    <td class="tableset2">{{ $assessor[0]->dd }}</td>
                                                </tr>
                                                <tr class="tableset">
                                                    <td class="tableset2" style="width:40%"><strong>Department:</strong>
                                                    </td>
                                                    <td class="tableset2">{{ $assessor[0]->dd }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>

                            <!--History========================================-->
                            <div class="col-md-9" id="d2"
                                style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%; display:none">
                                <br>
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Asset ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $today_date = Carbon\Carbon::now();
                                        @endphp
                                        @foreach ($assessment as $a)
                                            @if ($a->date_of_assessment >= $today_date)
                                                @if ($a->done == 1)
                                                    <tr>
                                                        <td><img src="/images/fleet/icons/green-circle.png"
                                                                style="width:10px; height:10px;">
                                                            {{ $a->date_of_assessment }}</td>
                                                        <td>{{ $a->time_of_assessment }}</td>
                                                        <td>{{ $a->asset_id }}</td>
                                                        <td><a href="{{ route('CommunityAssessment.navigator', $a->id) }}"
                                                                class="btn btn-primary">View Assessment</a></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td><img src="/images/fleet/icons/orange-circle.png"
                                                                style="width:10px; height:10px;">
                                                            {{ $a->date_of_assessment }}</td>
                                                        <td>{{ $a->time_of_assessment }}</td>
                                                        <td>{{ $a->asset_id }}</td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                            @else
                                                @if ($a->done == 1)
                                                    <tr>
                                                        <td><img src="/images/fleet/icons/green-circle.png"
                                                                style="width:10px; height:10px;">
                                                            {{ $a->date_of_assessment }}</td>
                                                        <td>{{ $a->time_of_assessment }}</td>
                                                        <td>{{ $a->asset_id }}</td>
                                                        <td><a href="{{ route('CommunityAssessment.navigator', $a->id) }}"
                                                                class="btn btn-primary">View Assessment</a></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td><img src="/images/fleet/icons/red-circle.png"
                                                                style="width:10px; height:10px;">
                                                            {{ $a->date_of_assessment }}</td>
                                                        <td>{{ $a->time_of_assessment }}</td>
                                                        <td>{{ $a->asset_id }}</td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('#example').DataTable({
                                        "order": [
                                            [0, "desc"]
                                        ]
                                    });
                                });
                            </script>

                            <!--Performance========================================-->
                            <div class="col-md-9" id="d4"
                                style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px; border-radius:5px; height:100%;  display:none">
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <div class="counter">
                                            <center>
                                                <img src="/images/fleet/icons/average.png"
                                                    style="width:50px; height:50px;"><br>
                                                <h2 style="color:#9F221F">{{ $stat1[0]->average }}</h2>
                                                <p class="count-text" style="color:black">Average Assessment<br> Score</p>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="counter">
                                            <center>
                                                <img src="/images/fleet/icons/upcoming.png"
                                                    style="width:50px; height:50px;"><br>
                                                <h2 style="color:#9F221F">{{ $stat3[0]->total }}</h2>
                                                <p class="count-text" style="color:black">Upcoming <br>Assessment</p>
                                                <br>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="counter">
                                            <center>
                                                <img src="/images/fleet/icons/complete.png"
                                                    style="width:50px; height:50px;"><br>
                                                <h2 style="color:#9F221F">{{ $stat4[0]->total }}</h2>
                                                <p class="count-text" style="color:black">Complete <br>Assessment</p>
                                                <br>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="counter">
                                            <center>
                                                <img src="/images/fleet/icons/incomplete.png"
                                                    style="width:50px; height:50px;"><br>
                                                <h2 style="color:#9F221F">{{ $stat5[0]->total }}</h2>
                                                <p class="count-text" style="color:black">Incomplete <br>Assessment</p>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Planned vs Actual Assessments</h3>
                                    <canvas id="speedChart" width="100" height="80"></canvas>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <br>

            </section><!-- /.content -->

            <script>
                var speedCanvas = document.getElementById("speedChart");

                Chart.defaults.global.defaultFontFamily = "Lato";
                Chart.defaults.global.defaultFontSize = 18;

                var dataFirst = {
                    label: "Planned",
                    data: [{{ $chart2[0]->count1 }}, {{ $chart2[0]->count2 }}, {{ $chart2[0]->count3 }},
                        {{ $chart2[0]->count4 }}, {{ $chart2[0]->count5 }}
                    ],
                    lineTension: 0,
                    fill: false,
                    borderColor: '#9F221F'
                };

                var dataSecond = {
                    label: "Actual",
                    data: [{{ $chart[0]->count1 }}, {{ $chart[0]->count2 }}, {{ $chart[0]->count3 }},
                        {{ $chart[0]->count4 }}, {{ $chart[0]->count5 }}
                    ],
                    lineTension: 0,
                    fill: false,
                    borderColor: '#48B5E5'
                };

                var speedData = {
                    labels: ["{{ now()->year }}", "{{ now()->year - 1 }}", "{{ now()->year - 2 }}",
                        "{{ now()->year - 3 }}",
                        "{{ now()->year - 4 }}"
                    ],
                    datasets: [dataFirst, dataSecond]
                };

                var chartOptions = {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            fontColor: 'black'
                        }
                    }
                };

                var lineChart = new Chart(speedCanvas, {
                    type: 'line',
                    data: speedData,
                    options: chartOptions
                });
            </script>
            <script>
                function tab1() {
                    document.getElementById("d2").style.display = "none";
                    //document.getElementById("d3").style.display = "none";
                    document.getElementById("d4").style.display = "none";

                    document.getElementById("t2").style.backgroundColor = "#33b5e5";
                    //document.getElementById("t3").style.backgroundColor = "#33b5e5";
                    document.getElementById("t4").style.backgroundColor = "#33b5e5";

                    document.getElementById("t2").style.borderColor = "transparent";
                    //document.getElementById("t3").style.borderColor = "transparent";
                    document.getElementById("t4").style.borderColor = "transparent";

                    document.getElementById("d1").style.display = "inherit";
                    document.getElementById("t1").style.backgroundColor = "#A42420";
                    document.getElementById("t1").style.borderColor = "#A42420";
                }

                function tab2() {
                    document.getElementById("d1").style.display = "none";
                    //document.getElementById("d3").style.display = "none";
                    document.getElementById("d4").style.display = "none";

                    document.getElementById("t1").style.backgroundColor = "#33b5e5";
                    //document.getElementById("t3").style.backgroundColor = "#33b5e5";
                    document.getElementById("t4").style.backgroundColor = "#33b5e5";

                    document.getElementById("t1").style.borderColor = "transparent";
                    //document.getElementById("t3").style.borderColor = "transparent";
                    document.getElementById("t4").style.borderColor = "transparent";

                    document.getElementById("d2").style.display = "inherit";
                    document.getElementById("t2").style.backgroundColor = "#A42420";
                    document.getElementById("t2").style.borderColor = "#A42420";
                }

                function tab4() {
                    document.getElementById("d1").style.display = "none";
                    //document.getElementById("d3").style.display = "none";
                    document.getElementById("d2").style.display = "none";

                    document.getElementById("t1").style.backgroundColor = "#33b5e5";
                    //document.getElementById("t3").style.backgroundColor = "#33b5e5";
                    document.getElementById("t2").style.backgroundColor = "#33b5e5";

                    document.getElementById("t1").style.borderColor = "transparent";
                    //document.getElementById("t3").style.borderColor = "transparent";
                    document.getElementById("t2").style.borderColor = "transparent";

                    document.getElementById("d4").style.display = "inherit";
                    document.getElementById("t4").style.backgroundColor = "#A42420";
                    document.getElementById("t4").style.borderColor = "#A42420";
                }
            </script>

        </div>
    @endsection
