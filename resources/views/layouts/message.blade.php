@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <strong>Success!!</strong>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info">
        <strong>Info!</strong>
        <p>{{ Session::get('info') }}</p>
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning">
        <strong>Warning!</strong>
        <p>{{ Session::get('warning') }}</p>
    </div>
@endif
