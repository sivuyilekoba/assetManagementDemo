<script>
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var dataFirst = {
        label: "Planned",
        data: [12, 11, 3, 5, 7, 8],
        lineTension: 0,
        fill: false,
        borderColor: '#9F221F'
    };

    var dataSecond = {
        label: "Actual",
        data: [12, 11, 3, 5, 7, 8],
        lineTension: 0,
        fill: false,
        borderColor: '#48B5E5'
    };

    var speedData = {
    labels: ["one","one","one","one","one"],
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
    function show()
    {
        document.getElementById("sure").style.display = "inherit";
    }
</script>

<script>
    function tab1() {
        document.getElementById("d2").style.display = "none";
        document.getElementById("d3").style.display = "none";
        document.getElementById("d4").style.display = "none";
        document.getElementById("d5").style.display = "none";
        document.getElementById("d6").style.display = "none";
        
        document.getElementById("t2").style.backgroundColor = "#33b5e5";
        document.getElementById("t3").style.backgroundColor = "#33b5e5";
        document.getElementById("t4").style.backgroundColor = "#33b5e5";
        document.getElementById("t5").style.backgroundColor = "#33b5e5";
        document.getElementById("t6").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t2").style.borderColor = "transparent";
        document.getElementById("t3").style.borderColor = "transparent";
        document.getElementById("t4").style.borderColor = "transparent";
        document.getElementById("t5").style.borderColor = "transparent";
        document.getElementById("t6").style.borderColor = "transparent";
        
        document.getElementById("d1").style.display = "inherit";
        document.getElementById("t1").style.backgroundColor = "#A42420";
        document.getElementById("t1").style.borderColor = "#A42420";
    }
    
    function tab2() {
        document.getElementById("d1").style.display = "none";
        document.getElementById("d3").style.display = "none";
        document.getElementById("d4").style.display = "none";
        document.getElementById("d5").style.display = "none";
        document.getElementById("d6").style.display = "none";
        
        document.getElementById("t1").style.backgroundColor = "#33b5e5";
        document.getElementById("t3").style.backgroundColor = "#33b5e5";
        document.getElementById("t4").style.backgroundColor = "#33b5e5";
        document.getElementById("t5").style.backgroundColor = "#33b5e5";
        document.getElementById("t6").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t1").style.borderColor = "transparent";
        document.getElementById("t3").style.borderColor = "transparent";
        document.getElementById("t4").style.borderColor = "transparent";
        document.getElementById("t5").style.borderColor = "transparent";
        document.getElementById("t6").style.borderColor = "transparent";
        
        document.getElementById("d2").style.display = "inherit";
        document.getElementById("t2").style.backgroundColor = "#A42420";
        document.getElementById("t2").style.borderColor = "#A42420";
    }
    
     function tab3() {        
        document.getElementById("d1").style.display = "none";
        document.getElementById("d2").style.display = "none";
        document.getElementById("d4").style.display = "none";
        document.getElementById("d5").style.display = "none";
        document.getElementById("d6").style.display = "none";
        
        document.getElementById("t1").style.backgroundColor = "#33b5e5";
        document.getElementById("t2").style.backgroundColor = "#33b5e5";
        document.getElementById("t4").style.backgroundColor = "#33b5e5";
        document.getElementById("t5").style.backgroundColor = "#33b5e5";
        document.getElementById("t6").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t1").style.borderColor = "transparent";
        document.getElementById("t2").style.borderColor = "transparent";
        document.getElementById("t4").style.borderColor = "transparent";
        document.getElementById("t5").style.borderColor = "transparent";
        document.getElementById("t6").style.borderColor = "transparent";
        
        document.getElementById("d3").style.display = "inherit";
        document.getElementById("t3").style.backgroundColor = "#A42420";
        document.getElementById("t3").style.borderColor = "#A42420";

        buildLayers();
    }
    
    function tab4() {
        document.getElementById("d1").style.display = "none";
        document.getElementById("d3").style.display = "none";
        document.getElementById("d2").style.display = "none";
        document.getElementById("d5").style.display = "none";
        document.getElementById("d6").style.display = "none";
        
        document.getElementById("t1").style.backgroundColor = "#33b5e5";
        document.getElementById("t3").style.backgroundColor = "#33b5e5";
        document.getElementById("t2").style.backgroundColor = "#33b5e5";
        document.getElementById("t5").style.backgroundColor = "#33b5e5";
        document.getElementById("t6").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t1").style.borderColor = "transparent";
        document.getElementById("t3").style.borderColor = "transparent";
        document.getElementById("t2").style.borderColor = "transparent";
        document.getElementById("t5").style.borderColor = "transparent";
        document.getElementById("t6").style.borderColor = "transparent";
        
        document.getElementById("d4").style.display = "inherit";
        document.getElementById("t4").style.backgroundColor = "#A42420";
        document.getElementById("t4").style.borderColor = "#A42420";
    }

    function tab5() {
        document.getElementById("d1").style.display = "none";
        document.getElementById("d3").style.display = "none";
        document.getElementById("d2").style.display = "none";
        document.getElementById("d4").style.display = "none";
        document.getElementById("d6").style.display = "none";
        
        document.getElementById("t1").style.backgroundColor = "#33b5e5";
        document.getElementById("t3").style.backgroundColor = "#33b5e5";
        document.getElementById("t2").style.backgroundColor = "#33b5e5";
        document.getElementById("t4").style.backgroundColor = "#33b5e5";
        document.getElementById("t6").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t1").style.borderColor = "transparent";
        document.getElementById("t3").style.borderColor = "transparent";
        document.getElementById("t2").style.borderColor = "transparent";
        document.getElementById("t4").style.borderColor = "transparent";
        document.getElementById("t6").style.borderColor = "transparent";
        
        document.getElementById("d5").style.display = "inherit";
        document.getElementById("t5").style.backgroundColor = "#A42420";
        document.getElementById("t5").style.borderColor = "#A42420";
    }

    function tab6() {
        document.getElementById("d1").style.display = "none";
        document.getElementById("d3").style.display = "none";
        document.getElementById("d2").style.display = "none";
        document.getElementById("d4").style.display = "none";
        document.getElementById("d5").style.display = "none";
        
        document.getElementById("t1").style.backgroundColor = "#33b5e5";
        document.getElementById("t3").style.backgroundColor = "#33b5e5";
        document.getElementById("t2").style.backgroundColor = "#33b5e5";
        document.getElementById("t4").style.backgroundColor = "#33b5e5";
        document.getElementById("t5").style.backgroundColor = "#33b5e5";
        
        document.getElementById("t1").style.borderColor = "transparent";
        document.getElementById("t3").style.borderColor = "transparent";
        document.getElementById("t2").style.borderColor = "transparent";
        document.getElementById("t4").style.borderColor = "transparent";
        document.getElementById("t5").style.borderColor = "transparent";
        
        document.getElementById("d6").style.display = "inherit";
        document.getElementById("t6").style.backgroundColor = "#A42420";
        document.getElementById("t6").style.borderColor = "#A42420";
    }
</script>