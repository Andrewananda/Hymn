@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Hymns</h3>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            @include('layouts.message')
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
    </section>
@endsection
