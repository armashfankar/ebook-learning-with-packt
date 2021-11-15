@if(Session::has('error'))
    <div class="alert alert-danger mb-2 alert-dismissible fade show" role="alert">
        {{Session::get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="ft-x"></span>
        </button>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success mb-2 alert-dismissible fade show" role="alert" id="alert-success">
        {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="ft-x"></span>
        </button>
    </div>
@endif