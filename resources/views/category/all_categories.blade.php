@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Categories</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('layouts.message')
                    <table id="example" class="display" style="min-width: 845px;">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('category.edit',['id'=> $category->id]) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('category.delete',['id'=>$category->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
