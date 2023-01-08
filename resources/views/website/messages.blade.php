{{--@if(count($errors) > 0)
    <div class="w-100">
        <div class="alert alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert" style="float:right" aria-label="Close"></button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif--}}



@if(Session::has('create'))

    <div class="alert alert-success alert-dismissible" role="alert">
        <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Success!</h6>
        <span>{{session('create')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('update'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Success!</h6>
        <span>{{session('update')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Alert!</h6>
        <span>{{session('delete')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if(Session::has('exception'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Exception!</h6>
        <span>{{session('exception')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <h6 class="alert-heading mb-1"><i class="bx bx-xs bx-desktop align-top me-2"></i>Warning!</h6>
        <span>{{session('warning')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
