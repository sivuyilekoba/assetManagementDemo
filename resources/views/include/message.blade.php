@if(session('success'))
    <div class="alert alert-success col-12" >
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger col-12">
        {{session('error')}}
    </div>
@endif