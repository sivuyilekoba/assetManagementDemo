<div class="col-md-6">                               
    <div class="col-md-6">
        <div class="counter">   
            <center>
                <img src="/images/fleet/icons/calculator.png" style="width:50px; height:50px;"><br>
                <h2 style="color:#9F221F">{{$stat2[0]->total}}</h2>
                <p class="count-text" style="color:black">Total Assessment<br> Assigned</p>
                <br>
            </center>
        </div>
    </div>
    <div class="col-md-6">
        <div class="counter">   
            <center>
                <img src="/images/fleet/icons/upcoming.png" style="width:50px; height:50px;"><br>
                <h2 style="color:#9F221F">{{$stat3[0]->total}}</h2>
                <p class="count-text" style="color:black">Upcoming <br>Assessment</p>
                <br>
            </center>
        </div>
    </div>
    <div class="col-md-6">
        <div class="counter">   
            <center>
                <img src="/images/fleet/icons/complete.png" style="width:50px; height:50px;"><br>
                <h2 style="color:#9F221F">{{$stat5[0]->total}}</h2>
                <p class="count-text" style="color:black">Complete <br>Assessment</p>
                <br>
            </center>
        </div>
    </div>
    <div class="col-md-6">
        <div class="counter">   
            <center>
                <img src="/images/fleet/icons/incomplete.png" style="width:50px; height:50px;"><br>
                <h2 style="color:#9F221F">{{$stat4[0]->total}}</h2>
                <p class="count-text" style="color:black">Incomplete <br>Assessment</p>
                <br>
            </center>
        </div>
    </div>
</div>
<div class="col-md-6">
    <h3>Planned vs Actual Assessments</h3>
    <canvas id="speedChart" width="100" height="80"></canvas>
</div>