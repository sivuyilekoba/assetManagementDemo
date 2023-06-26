<div class="col-md-12">
    <table id="requestTable" class="display">
        <thead>
            <tr>
                <th><strong>Date/ Time</strong></th>
                <th><strong>Publisher</strong></th>
                <th><strong>Type</strong></th>
                <th><strong>Status</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($request as $d)
                <tr>
                    <td>{{$d->dd}}</td>
                    <td>{{$d->name}} {{$d->surname}}</td>
                    <td>{{$d->type}}</td>
                    <td>{{$d->status}}</td>
                    <td><a href="#" data-toggle="modal" data-target="#requestModal{{$d->id}}">View</a></td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#requestTable').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script>
</div>
