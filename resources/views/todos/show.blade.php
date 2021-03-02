@extends('layouts.app')


@section('title')
Task: {{$todo->name}}
@endsection


@section('content')
    <div class="container">
        <h1 class="text-center my-2"> Task Details</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                            <div class="card card-default">
                                <div class="card-header">
                                    {{$todo->name}}
                                </div>
                                <div class="card-body">
                                  {{$todo->description}}
                                </div>
                            </div>
                    <a href="/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
                    <a href="/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2 float-right">Delete</a>
                </div>
        </div>
 </div>
@endsection
