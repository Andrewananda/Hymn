@extends('layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-12" style="padding: 15px">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Hymn Category</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{ route('category.save_edit', ['id'=>$category->id]) }}">
                        @include('layouts.message')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input name="name" id="name" value="{{ $category->name }}" type="text" class="form-control" placeholder="Enter hymn category title">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="description" name="description" style="padding: 10px" placeholder="Enter Car Model Description" cols="100" rows="10"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
