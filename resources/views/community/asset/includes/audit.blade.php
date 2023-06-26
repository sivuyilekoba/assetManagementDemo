<div class="col-md-12">
    <table id="auditTable" class="display">
        <thead>
            <tr>
                <th><strong>Date/ Time</strong></th>
                <th><strong>Full Name</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($audit as $d)
                <tr>
                    <td>{{$d->date}}</td>
                    <td>{{$d->name}} {{$d->surname}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->action}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready( function () {
            $('#auditTable').DataTable(
                {
                    "order": [[0 , "desc" ]]
                }
            );
        });
    </script>
</div>             