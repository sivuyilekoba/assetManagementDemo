
@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communitydashboard.css') }}">

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px; ">
        <section class="content-header">
            <h1 style="color:black">
                <strong>Community Assets</strong>
                <small>Dashboard</small>
            </h1>

            @if($errors->any())
                <br>
                <div class="alert alert-danger col-12">
                    {{$errors->first()}}
                </div>
                <br>
                <br>
            @endif
        </section>


        <div class="col-md-12" style="float: right; margin-top:-25px; background-color:transperant; width:120px;">
            <select class="" id="dynamic_select">
                <option disabled selected>Select Year</option>
                @foreach($year as $y)
                    <option value="{{$y->year}}">{{$y->year-1}}/{{$y->year}}</option>
                    <?php 
                        $plus1 = $y->year + 1;
                        $plus2 = $y->year;
                    ?>
                @endforeach
                <?php                             
                    echo '<option value="'.$plus1.'">'.$plus2.'/'.$plus1.'</option>';
                ?>
            </select>
        </div>
        <script>
            $(function(){
              // bind change event to select
              $('#dynamic_select').on('change', function () {
                  var url = $(this).val(); // get selected value
                  if (url) { // require a URL
                        var url2 = '{{ route("CommunityHome.filter", ":id") }}';
                        url2 = url2.replace(':id', url);
                        window.location.href = url2;
                  }
                  return false;
              });
            });
        </script>

        <!-- Main content -->
        <section class="content">
    
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); height:23vw">
                        <h2 style="color:black; font-size:1.6vw">Asset Status</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myPieChart" width="600" height="450" ></canvas>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); height:23vw">
                        <h2 style="color:black; font-size:1.6vw;">Monthly Assessments</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myChart" width="600" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px);">
                        <h2 style="color:black; font-size:1.6vw">Asset Class Distribution</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myPieChart2" width="600" height="450"></canvas>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px);">
                        <h2 style="color:black; font-size:1.6vw">Asset Type Distribution</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myPieChart3" width="600" height="450"></canvas>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px);">
                        <h2 style="color:black; font-size:1.6vw">Planned vs Actual Assessments</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myPieChart4" width="600" height="450"></canvas>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px);">
                        <h2 style="color:black; font-size:1.6vw;">Average Monthly Assessment Scores</h2>
                        <br>
                        <div class="col-md-12">
                            <canvas id="myChart2" width="600" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div><!-- /.content-wrapper -->
    <script>
    Chart.defaults.global.legend.labels.usePointStyle = true;
    
    var data = [{
            data: [{{$pie1[0]->count1}},{{$pie1[0]->count2}}],
            backgroundColor: [
                '#0272BA',
                '#E29E25'
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
                labels: ['Active','Withdrawn'],
                datasets: data
            },
                options: options
        });
    </script>

    <script>
        Chart.defaults.global.legend.labels.usePointStyle = true;
        
        var data = [{
                data: [{{$pie2[0]->count1}}, {{$pie2[0]->count2}}],
                backgroundColor: [
                    '#0272BA',
                    '#E29E25'
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
        
        
            var ctx = document.getElementById("myPieChart2");
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Community Facilities','Sport & Recreation Facilities'],
                    datasets: data
                },
                    options: options
            });
        </script>

<script>
    Chart.defaults.global.legend.labels.usePointStyle = true;
    
    var data = [{
            data: [
                @foreach($pie3 AS $p)
                    {{$p->total}},
                @endforeach
            ],
            backgroundColor: [
                '#0272BA',
                '#E29E25',
                '#AF7AC5',
                '#A569BD',
                '#5499C7',
                '#5DADE2',
                '#48C9B0',
                '#45B39D',
                '#A9DFBF',
                '#F5B041',
                '#5DADE2',
                '#b4d7ed'
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
                        fontSize: 11,
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
    
    
        var ctx = document.getElementById("myPieChart3");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    @foreach($pie3 AS $p)
                        "{{$p->name}}",
                    @endforeach
                ],
                datasets: data
            },
                options: options
        });
    </script>

<script>
    Chart.defaults.global.legend.labels.usePointStyle = true;
    
    var data = [{
            data: [{{$pie4[0]->count1}},{{$pie4[0]->count2}}],
            backgroundColor: [
                '#E29E25',
                '#0272BA'
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
    
    
        var ctx = document.getElementById("myPieChart4");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Planned','Actual'],
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
              labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
              datasets: [
                {
                    label: "Scheduled Assessments",
                    backgroundColor: "#E29E25",
                    data: [
                        {{$chart1one[0]->jul}},
                        {{$chart1one[0]->aug}},
                        {{$chart1one[0]->sep}},
                        {{$chart1one[0]->oct}},
                        {{$chart1one[0]->nov}},
                        {{$chart1one[0]->dec}},
                        {{$chart1one[0]->jan}},
                        {{$chart1one[0]->feb}},
                        {{$chart1one[0]->mar}},
                        {{$chart1one[0]->apr}},
                        {{$chart1one[0]->may}},
                        {{$chart1one[0]->jun}}
                    ]
                },
                {
                    label: "Completed Assessments",
                    backgroundColor: "#0272BA",
                    data: [
                        {{$chart1two[0]->jul}},
                        {{$chart1two[0]->aug}},
                        {{$chart1two[0]->sep}},
                        {{$chart1two[0]->oct}},
                        {{$chart1two[0]->nov}},
                        {{$chart1two[0]->dec}},
                        {{$chart1two[0]->jan}},
                        {{$chart1two[0]->feb}},
                        {{$chart1two[0]->mar}},
                        {{$chart1two[0]->apr}},
                        {{$chart1two[0]->may}},
                        {{$chart1two[0]->jun}}
                    ]
                }
              ]
            },
            options: {
              legend: { 
                  fontColor: "black",
                  display: true,
                  labels: {
                    fontColor: "black",
                    fontSize: 18
                    }
              },
              title: {
                display: false,
                text: 'Monthly Acquisistion Count'
              },
              scales: {
                xAxes: [{stacked: false}],
                yAxes: [{stacked: false}]
            } ,
             plugins: {
                datalabels: {
                    color: 'black',
                }
            }
            }
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
          labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [
            {
                label: "Average Score",
                backgroundColor: "#E29E25",
                data: [{{ROUND($chart2[0]->count1, 2)}}, {{ROUND($chart2[0]->count2, 2)}}, {{ROUND($chart2[0]->count3, 2)}}, {{ROUND($chart2[0]->count4, 2)}}, {{ROUND($chart2[0]->count5, 2)}}, 
                {{ROUND($chart2[0]->count6, 2)}},{{ROUND($chart2[0]->count7, 2)}}, {{ROUND($chart2[0]->count8, 2)}}, {{ROUND($chart2[0]->count9, 2)}}, 
                {{ROUND($chart2[0]->count10, 2)}}, {{ROUND($chart2[0]->count11, 2)}}, {{ROUND($chart2[0]->count12, 2)}}]
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
            text: 'Monthly Assessment Average Score'
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

@endsection

