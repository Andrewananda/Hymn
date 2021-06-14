@extends('layouts.app')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Hymn</h3>
        </div>
        @include('layouts.message')
        <form enctype="multipart/form-data" method="post" action="{{ route('hymn.actual_edit', ['id'=>$hymn->id]) }}">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="first_name">Title</label>
                            <input type="text" name="title" value="{{$hymn->title}}" class="form-control" id="title" placeholder="Add Title">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="first_name">Hymn Number</label>
                            <input type="number" name="number" value="{{ $hymn->number }}" class="form-control" id="number" placeholder="Add hymn number">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Hymn Category</label>
                            <select class="form-control select2" name="category_id" id="category_id" style="width: 100%;">
                                <option selected="selected">Hymn category</option>
                                @foreach($categories as $hymn_category)
                                    <option @if($hymn->category_id == $hymn_category->id) selected="selected" @endif value="{{ $hymn_category->id }}">{{$hymn_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <textarea name="chorus" id="chorus" style="padding: 10px" placeholder="Enter chorus" cols="80" rows="10">{{$hymn->chorus}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="form-group">
                            <textarea id="description" name="description" style="padding: 10px" placeholder="Enter song" cols="100" rows="10">{{ $hymn->song }}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-body">
                <button type="submit" style="display:block;margin: 0% 35%; width: 300px" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
