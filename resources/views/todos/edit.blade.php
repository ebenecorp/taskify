@extends('layouts.app')

@section('title')
    taskify: edit {{ $todo->name }}
@endsection



@section('content')
    <h1 class="text-center md-5">
        Create Tasks
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Update a new task
                </div>

                <div class="card-body">
                        <form action="/{{ $todo->id }}/update-todo" method="POST" >
                            @csrf
                            {{-- <input type="hidden" value="{{ $todo->id }}"> --}}
                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>

                                @endif
                            <div class="form-group m-2">
                                <input type="text" placeholder="Name" name="name" value="{{ $todo->name }}" class="form-control">

                            </div>
                            <div class="form-group m-2">
                                <textarea name="description" placeholder="Description"  cols="5" rows="6" class="form-control">{{ $todo->description }}</textarea>

                            </div>
                            <div class="form-group text-center m-2">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
