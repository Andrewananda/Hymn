@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Hymns</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('layouts.message')
                    <table id="example" class="display" style="min-width: 845px;">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Number</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($songs as $song)
                            <tr>
                                <td>{{ $song->title }}</td>
                                <td>{{ $song->number }}</td>
                                <td>{{ $song->category->title }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('edit.hymn',['id'=> $song->id]) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('delete.hymn',['id'=>$song->id]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Number</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
