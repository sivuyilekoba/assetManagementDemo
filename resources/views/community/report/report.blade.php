@extends('layouts.community.app')

@section('content')

<style>
    table, th, td {
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
    }
</style>

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
                <div class="col-md-12"  style="background-color:white;">
                    <div class="col-md-12" style="background-color:white; padding:15px;">
                    
                    <a class="btn add" href="javascript: history.go(-1)"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                    <a class="btn add" href="#" onclick="month()"><strong>View Month</strong></a>
                    <a class="btn add" href="#" onclick="year()"><strong>View Year</strong></a>
                    <br>
                    <br>
                    <hr>
                    <br>
                    </div><!--/.col (left) -->  

                    {{-- YEAR START --}}
                    <div id="year" style="display:none">
                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:65px; ">
                            <center><h3 >Assessment Year Report ({{$year}})</h3></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black; height:100px; ">
                            <br>
                            <center>
                                <h5><strong>The report depicts the total assessments for the year of {{$year}}</strong></h5>
                                <h5>The Year {{$year}} total of {{$data2[0]->total}} assessments was scheduled, Of the {{$data2[0]->total}}, {{$data2[0]->upcoming}} were upcoming and {{$data2[0]->complete}} completed. Total of {{$data2[0]->incomplete}} was incomplete</h5>
                            </center>
                            <br>
                        </div>

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; ">
                            <center><h4>Assessment Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Assessment Log</h4></center>
                            <br>
                            <table style="width:100%">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Month</th>
                                        <th height="40" style="width:40%"># Assessments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                    ?>
                                    @foreach ($data1 as $d)
                                        <tr>
                                            <td height="30">{{$d->year}}</td>
                                            <td height="30">{{$d->total}} <a type="button" data-toggle="modal" data-target="#myModal{{$d->year}}" style="float:right">Assessments</a></td>
                                        </tr>
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                        ?>
                                    @endforeach
                                </tbody>
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:50%">Grand Total</th>
                                        <th height="40" style="width:50%">{{$i}}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Upcoming vs Complete vs Incomplete</h4></center>
                            <br>
                            <center><canvas id="myPieChart" width="600" height="300"></canvas></center>
                            <br>
                            <center><h4>Average Score of asset parts</h4></center>
                            <br>
                            <center><canvas id="myChart" width="600" height="200"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Assessor Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Assessors</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Name & Surname</th>
                                        <th height="40" style="width:20%"># Assigned</th>
                                        <th height="40" style="width:20%">Completed</th>
                                        <th height="40" style="width:20%">Ratio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                        $y=0;
                                        $r=0;
                                    ?>
                                    @foreach ($data6 as $d)
                                        <tr>
                                            <td height="30">{{$d->fullname}}</td>
                                            <td height="30">{{$d->total}}</td>
                                            <td height="30">{{$d->completed}}</td>
                                            <td height="30">{{$ratio = $d->completed/$d->total}}</td>
                                        </tr>   
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                            $y = $y + $d->completed;
                                        ?>
                                    @endforeach
                                </tbody>
                                
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Grand Total</th>
                                        <th height="40" style="width:20%">{{$i}}</th>
                                        <th height="40" style="width:20%">{{$y}}</th>
                                        <th height="40" style="width:20%">
                                            <?php 
                                                if($y == 0)
                                                { 
                                                    echo 0;
                                                }else
                                                {
                                                    echo ROUND($ratio2 = $y/$i, 2); 
                                                } 
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Most Assessments Assigned Assessors</h4></center>
                            <br>
                            <center><canvas id="myPieChart2" width="600" height="300"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Directorate Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Directorates</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Directorate Name</th>
                                        <th height="40" style="width:40%"># Assessments</th>
                                        <th height="40" >Average Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                        $y=0;
                                    ?>
                                    @foreach ($data7 as $d)
                                        <tr>
                                            <td height="30">{{$d->name}}</td>
                                            <td height="30">{{$d->total}}</td>
                                            <td height="30">{{$d->average}}</td>
                                        </tr>   
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                            $y = $y + $d->average;
                                        ?>
                                    @endforeach
                                </tbody>
                                
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Grand Total</th>
                                        <th height="40" style="width:40%">{{$i}}</th>
                                        <th height="40" style="width:20%;">
                                            <?php 
                                                if($y == 0)
                                                { 
                                                    echo 0;
                                                }else
                                                {
                                                    echo ROUND($avg = $y/$index, 2); 
                                                } 
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Directorate Assessments Count</h4></center>
                            <br>
                            <center><canvas id="myPieChart4" width="600" height="300"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Asset Class</h4></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Asset Class</h4></center>
                            <br>
                            <center><canvas id="myChart2" width="100" height="40"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Community Assessment Outliers</h4></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Outliers for assessment properties that got a overall score of 2 & less</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:10%">Asset ID</th>
                                        <th height="40" style="width:30%">Sub Department</th>
                                        <th height="40" style="width:15%">Date of Assessment</th>
                                        <th height="40" style="width:15%">Time of Assessment</th>
                                        <th height="40" style="width:20%">Assessor</th>
                                        <th height="40" >Overall Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data10 as $d)
                                        <tr>
                                            <td height="30">{{$d->asset_id}}</td>
                                            <td height="30">{{$d->dd}}</td>
                                            <td height="30">{{$d->date_of_assessment}}</td>
                                            <td height="30">{{$d->time_of_assessment}}</td>
                                            <td height="30">{{$d->name}} {{$d->surname}}</td>
                                            <td height="30">{{$d->average}}</td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{-- YEAR END --}}

                    {{-- MONTH START --}}
                    <div id="month">
                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:65px; ">
                            @php
                                $dateObj   = DateTime::createFromFormat('!m', $month);
                                $monthName = $dateObj->format('F');
                            @endphp
                            <center><h3 >Assessment Month Report ({{$monthName}}- {{$year}})</h3></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black; height:100px; ">
                            <br>
                            <center>
                                <h5><strong>The report depicts the total assessments for the month of {{$monthName}}</strong></h5>
                                <h5>The Month of {{$monthName}} had a total of {{$data2m[0]->total}} assessments scheduled, Of the {{$data2m[0]->total}}, {{$data2m[0]->upcoming}} were upcoming and {{$data2m[0]->complete}} completed. Total of {{$data2m[0]->incomplete}} was incomplete</h5>
                            </center>
                            <br>
                        </div>

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; ">
                            <center><h4>Assessment Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Assessment Log</h4></center>
                            <br>
                            <table style="width:100%">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Day</th>
                                        <th height="40" style="width:40%"># Assessments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                    ?>
                                    @foreach ($data1m as $d)
                                        <tr>
                                            <td height="30">{{$d->year}}</td>
                                            <td height="30">{{$d->total}} <a type="button" data-toggle="modal" data-target="#myModal{{$d->year}}" style="float:right">Assessments</a></td>
                                        </tr>
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                        ?>
                                    @endforeach
                                    <thead style="background-color:#9F221F; color:white;">
                                        <tr> 
                                            <th height="40" style="width:40%">Grand Total</th>
                                            <th height="40" style="width:40%">{{$i}}</th>
                                        </tr>
                                    </thead>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Upcoming vs Complete vs Incomplete</h4></center>
                            <br>
                            <center><canvas id="myPieChartm" width="600" height="300"></canvas></center>
                            <br>
                            <center><h4>Average Score of asset parts</h4></center>
                            <br>
                            <center><canvas id="myChartm" width="600" height="200"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Assessor Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Assessors</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Name & Surname</th>
                                        <th height="40" style="width:20%"># Assigned</th>
                                        <th height="40" style="width:20%">Completed</th>
                                        <th height="40" style="width:20%">Ratio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                        $y=0;
                                        $r=0;
                                    ?>
                                    @foreach ($data6m as $d)
                                        <tr>
                                            <td height="30">{{$d->fullname}}</td>
                                            <td height="30">{{$d->total}}</td>
                                            <td height="30">{{$d->completed}}</td>
                                            <td height="30">{{$ratio = $d->completed/$d->total}}</td>
                                        </tr>   
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                            $y = $y + $d->completed;
                                        ?>
                                    @endforeach
                                </tbody>
                                
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Grand Total</th>
                                        <th height="40" style="width:20%">{{$i}}</th>
                                        <th height="40" style="width:20%">{{$y}}</th>
                                        <th height="40" style="width:20%">
                                            <?php 
                                                if($y == 0)
                                                { 
                                                    echo 0;
                                                }else
                                                {
                                                    echo ROUND($ratio2 = $y/$i, 2); 
                                                } 
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Most Assessments Assigned Assessors</h4></center>
                            <br>
                            <center><canvas id="myPieChart2m" width="600" height="300"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Directorate Statistics</h4></center>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Directorates</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Directorate Name</th>
                                        <th height="40" style="width:40%"># Assessments</th>
                                        <th height="40" >Average Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index=0;
                                        $i=0;
                                        $y=0;
                                    ?>
                                    @foreach ($data7m as $d)
                                        <tr>
                                            <td height="30">{{$d->name}}</td>
                                            <td height="30">{{$d->total}}</td>
                                            <td height="30">{{$d->average}}</td>
                                        </tr>   
                                        <?php 
                                            $i = $i + $d->total;
                                            $index++;
                                            $y = $y + $d->average;
                                        ?>
                                    @endforeach
                                </tbody>
                                
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:40%">Grand Total</th>
                                        <th height="40" style="width:40%">{{$i}}</th>
                                        <th height="40" style="width:20%;">
                                            <?php 
                                                if($y == 0)
                                                { 
                                                    echo 0;
                                                }else
                                                {
                                                    echo ROUND($avg = $y/$index, 2); 
                                                } 
                                            ?>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="col-md-6" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Directorate Assessments Count</h4></center>
                            <br>
                            <center><canvas id="myPieChart4m" width="600" height="300"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Asset Class</h4></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Asset Class</h4></center>
                            <br>
                            <center><canvas id="myChart2m" width="100" height="40"></canvas></center>
                        </div>

                        {{-- ====================== --}}

                        <div class="col-md-12" style="background-color:#9F221F; color:white; height:35px; margin-top:20px">
                            <center><h4>Community Assessment Outliers</h4></center>
                        </div>

                        <div class="col-md-12" style="background-color:white; color:black;">
                            <br>
                            <center><h4>Outliers for assessment properties that got a overall score of 2 & less</h4></center>
                            <br>
                            <table style="width:100%;">
                                <thead style="background-color:#9F221F; color:white;">
                                    <tr> 
                                        <th height="40" style="width:10%">Asset ID</th>
                                        <th height="40" style="width:30%">Sub Department</th>
                                        <th height="40" style="width:15%">Date of Assessment</th>
                                        <th height="40" style="width:15%">Time of Assessment</th>
                                        <th height="40" style="width:20%">Assessor</th>
                                        <th height="40" >Overall Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data10m as $d)
                                        <tr>
                                            <td height="30">{{$d->asset_id}}</td>
                                            <td height="30">{{$d->dd}}</td>
                                            <td height="30">{{$d->date_of_assessment}}</td>
                                            <td height="30">{{$d->time_of_assessment}}</td>
                                            <td height="30">{{$d->name}} {{$d->surname}}</td>
                                            <td height="30">{{$d->average}}</td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{-- MONTH END --}}

                </div>
            </div>
            </div>
            
        </div> 
        
        </section><!-- /.content -->

</div><!-- /.content-wrapper -->
</div>

<script>
    function year()
    {
        document.getElementById("year").style.display = "inherit";
        document.getElementById("month").style.display = "none";
    }

    function month()
    {
        document.getElementById("month").style.display = "inherit";
        document.getElementById("year").style.display = "none";
    }
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
        data: [{{$data2[0]->upcoming}}, {{$data2[0]->complete}}, {{$data2[0]->incomplete}}],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C',
            '#C24042',
            '#C24042',
            '#DE5A5C',
            '#E48E90',
            '#CF9F4A',
            '#DABD8B',
            '#2B5875'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: true,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChart");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Upcoming','Completed','Incomplete'],
        datasets: data
    },
        options: options
});
</script>

<script>
var d = new Date();
var n = d.getFullYear();
var two = n - 1;
var three = n - 2;
var four = n - 3;

// Bar chart
new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
        labels: ['Building Civils','Building Electrical', 'Building External', 'Building Mechanical', 'Building Soft Service'],
        datasets: [
        {
            label: "Average Score",
            backgroundColor: "#E29E25",
            data: [
                Math.round({{$data3[0]->count1}}), 
                Math.round({{$data3[0]->count2}}),
                Math.round({{$data3[0]->count3}}),
                Math.round({{$data3[0]->count4}}),
                Math.round({{$data3[0]->count5}})]
        }
        ]
    },
    options: {
        legend: { 
            fontColor: "black",
            display: false,
            labels: {
            fontColor: "black",
            fontSize: 18
            }
        },
        title: {
        display: false,
        text: 'Monthly Assessment Count'
        },
    scales: {
        yAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }],
        xAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }]
    },
        plugins: {
        datalabels: {
            color: 'black',
        }
    }
    }
});
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
    data: [@foreach($data5 as $d) {{$d->total}}, @endforeach],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C',
            '#C24042',
            '#C24042',
            '#DE5A5C',
            '#E48E90',
            '#CF9F4A',
            '#DABD8B',
            '#2B5875'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: false,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChart2");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [@foreach($data5 as $d) "{{$d->fullname}}", @endforeach],
        datasets: data
    },
        options: options
});
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
    data: [@foreach($data7 as $d) {{$d->total}}, @endforeach],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C',
            '#C24042',
            '#C24042',
            '#DE5A5C',
            '#E48E90',
            '#CF9F4A',
            '#DABD8B',
            '#2B5875'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: false,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChart4");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [@foreach($data7 as $d) "{{$d->name}}", @endforeach],
        datasets: data
    },
        options: options
});
</script>

<script>
var d = new Date();
var n = d.getFullYear();
var two = n - 1;
var three = n - 2;
var four = n - 3;

// Bar chart
new Chart(document.getElementById("myChart2"), {
    type: 'bar',
    data: {
        labels: [@foreach($data8 as $d) "{{$d->name}}", @endforeach],
        datasets: [
        {
            label: "Average Score",
            backgroundColor: "#E29E25",
            data: [
                @foreach($data8 as $d) {{$d->average}}, @endforeach
            ]
        }
        ]
    },
    options: {
        legend: { 
            fontColor: "black",
            display: false,
            labels: {
            fontColor: "black",
            fontSize: 18
            }
        },
        title: {
        display: false,
        text: 'Monthly Assessment Count'
        },
    scales: {
        yAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }],
        xAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }]
    },
        plugins: {
        datalabels: {
            color: 'black',
        }
    }
    }
});
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
        data: [{{$data2m[0]->upcoming}}, {{$data2m[0]->complete}}, {{$data2m[0]->incomplete}}],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C',
            '#C24042',
            '#C24042',
            '#DE5A5C',
            '#E48E90',
            '#CF9F4A',
            '#DABD8B',
            '#2B5875'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: true,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChartm");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Upcoming','Completed','Incomplete'],
        datasets: data
    },
        options: options
});
</script>

<script>
// Bar chart
new Chart(document.getElementById("myChartm"), {
    type: 'bar',
    data: {
        labels: ['Building Civils','Building Electrical', 'Building External', 'Building Mechanical', 'Building Soft Service'],
        datasets: [
        {
            label: "Average Score",
            backgroundColor: "#E29E25",
            data: [
                Math.round({{$data3m[0]->count1}}), 
                Math.round({{$data3m[0]->count2}}),
                Math.round({{$data3m[0]->count3}}),
                Math.round({{$data3m[0]->count4}}),
                Math.round({{$data3m[0]->count5}})]
        }
        ]
    },
    options: {
        legend: { 
            fontColor: "black",
            display: false,
            labels: {
            fontColor: "black",
            fontSize: 18
            }
        },
        title: {
        display: false,
        text: 'Monthly Assessment Count'
        },
    scales: {
        yAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }],
        xAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }]
    },
        plugins: {
        datalabels: {
            color: 'black',
        }
    }
    }
});
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
    data: [@foreach($data5m as $d) {{$d->total}}, @endforeach],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: false,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChart2m");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [@foreach($data5m as $d) "{{$d->fullname}}", @endforeach],
        datasets: data
    },
        options: options
});
</script>

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;

var data = [{
    data: [@foreach($data7m as $d) {{$d->total}}, @endforeach],
        backgroundColor: [
            '#0272BA',
            '#E29E25',
            '#9C1A1C',
            '#C24042',
            '#C24042',
            '#DE5A5C',
            '#E48E90',
            '#CF9F4A',
            '#DABD8B',
            '#2B5875'
        ],
        borderColor: "black",
        borderWidth: 0,
        segmentShowStroke: false
    }];
    
    var options = {
        responsive: true,
            legend: {
                position: 'bottom',
                display: false,
                labels:{
                    fontColor: "black",
                    fontSize: 14,
                    padding: 10
                }
            },
        tooltips: {
            enabled: true
    },
        plugins: {
            datalabels: {
                formatter: (value, ctx) => {
                
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value*100 / sum).toFixed(2)+"%";
                    return percentage;
                    
                },
                color: 'black',
            }
        }
    };


var ctx = document.getElementById("myPieChart4m");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [@foreach($data7m as $d) "{{$d->name}}", @endforeach],
        datasets: data
    },
        options: options
});
</script>

<script>
// Bar chart
new Chart(document.getElementById("myChart2m"), {
    type: 'bar',
    data: {
        labels: [@foreach($data8m as $d) "{{$d->name}}", @endforeach],
        datasets: [
        {
            label: "Average Score",
            backgroundColor: "#E29E25",
            data: [
                @foreach($data8m as $d) {{$d->average}}, @endforeach
            ]
        }
        ]
    },
    options: {
        legend: { 
            fontColor: "black",
            display: false,
            labels: {
            fontColor: "black",
            fontSize: 18
            }
        },
        title: {
        display: false,
        text: 'Monthly Assessment Count'
        },
    scales: {
        yAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }],
        xAxes: [{
            ticks: {
                fontColor: "black",
                beginAtZero: true
            }
        }]
    },
        plugins: {
        datalabels: {
            color: 'black',
        }
    }
    }
});
</script>

<?php 
    $text = "";
?>
@foreach ($data1 as $d)
    @foreach($modal1 as $m)
        @if($m->month == $d->year)
            <?php
                $text .= "Fleet Number: ".$m->description."  <br>(Time: ".$m->time_of_assessment.")<br><br>";
            ?>
        @endif
    @endforeach
    
    <!-- Modal -->
    <div id="myModal{{$d->year}}" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Assessments for Month {{$d->year}}</h4>
          </div>
          <div class="modal-body">
            <p><?php echo $text ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      </div>
    </div>
@endforeach

<?php 
    $text2 = "";
?>
@foreach ($data1m as $d)
    @foreach($modal2 as $m)
        @if($m->month == $d->year)
            <?php
                $text2 .= "Fleet Number: ".$m->description."  <br>(Time: ".$m->time_of_assessment.")<br><br>";
            ?>
        @endif
    @endforeach
    
    <!-- Modal -->
    <div id="myModal{{$d->year}}" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Assessments for Day {{$d->year}}</h4>
          </div>
          <div class="modal-body">
            <p><?php echo $text2 ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      </div>
    </div>
@endforeach

@endsection
