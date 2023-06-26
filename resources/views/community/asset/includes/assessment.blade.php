<div class="col-md-12">
    <h2 style="color:black;">Assessment History</h2>
    <br>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th><strong>Date/ Time</strong></th>
                <th><strong>Assessor</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
            @php
                $today_date = Carbon\Carbon::now();
            @endphp
            @foreach ($history as $h)
                @if($h->date_of_assessment >= $today_date)
                    @if($h->done == 1)
                        <tr>
                            <td><img src="/images/fleet/icons/green-circle.png" style="width:10px; height:10px;"> {{$h->date_of_assessment}} {{$h->time_of_assessment}}</td>
                            <td>{{$h->name}} {{$h->surname}} [<a href="/CommunityAssessor/{{$h->ids}}">view</a>]</td>
                            <td><a href="{{route('CommunityAssessment.navigator', ['id' => $h->id])}}" class="btn btn-info" role="button">View</a></td>
                        </tr>
                    @else
                        <tr>
                            <td><img src="/images/fleet/icons/orange-circle.png" style="width:10px; height:10px;"> {{$h->date_of_assessment}} {{$h->time_of_assessment}}</td>
                            <td>{{$h->name}} {{$h->surname}} [<a href="/CommunityAssessor/{{$h->ids}}">view</a>]</td>
                            <td></td>
                        </tr>
                    @endif
                @else
                    @if($h->done == 1)
                        <tr>
                            <td><img src="/images/fleet/icons/green-circle.png" style="width:10px; height:10px;"> {{$h->date_of_assessment}} {{$h->time_of_assessment}}</td>
                            <td>{{$h->name}} {{$h->surname}} [<a href="/CommunityAssessor/{{$h->ids}}">view</a>]</td>
                            <td><a href="{{route('CommunityAssessment.navigator', ['id' => $h->id])}}" class="btn btn-info" role="button">View</a></td>
                        </tr>
                    @else
                        <tr>
                            <td><img src="/images/fleet/icons/red-circle.png" style="width:10px; height:10px;"> {{$h->date_of_assessment}} {{$h->time_of_assessment}}</td>
                            <td>{{$h->name}} {{$h->surname}} [<a href="/CommunityAssessor/{{$h->ids}}">view</a>]</td>
                            <td></td>
                        </tr>
                    @endif
                @endif
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready( function () {
        $('#example').DataTable(
            {
                "order": [[0 , "desc" ]]
            }
        );
    });
</script>  