@extends('layouts.app')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Hymn Category</h3>
        </div>
        @include('layouts.message')
        <form enctype="multipart/form-data" method="post" action="{{ route('category.create') }}">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="first_name">Title</label>
                            <input type="text" name="title" value="{{$category->name}}" class="form-control" id="title" placeholder="Add Title">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <textarea name="description" style="padding: 10px" placeholder="Enter song" cols="100" rows="10"></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-body">
                <button type="submit" style="display:block;margin: 0% 35%; width: 300px" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    </div>
@endsection
