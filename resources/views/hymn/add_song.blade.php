@extends('layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-12" style="padding: 15px">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Hymn</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('hymn.create') }}">
                        @include('layouts.message')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input name="title" id="title" type="text" class="form-control" placeholder="Enter hymn title">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Number</label>
                                <input name="number" id="number" type="number" class="form-control" placeholder="Enter hymn number">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Hymn Category</label>
                                <select name="category_id" id="category_id" class="form-control default-select form-control-lg">
                                    <option name="category_id" id="category_id" value="0">Select Category</option>
                                    @foreach(\App\Category::all() as $category)
                                    <option name="category_id" id="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <textarea name="chorus" id="chorus" style="padding: 10px" placeholder="Enter chorus" cols="80" rows="10"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="description" name="description" style="padding: 10px" placeholder="Enter song" cols="100" rows="10"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
