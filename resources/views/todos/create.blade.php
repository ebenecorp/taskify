@extends('layouts.app')

@section('title')
    taskify: create a tasks
@endsection



@section('content')
    <h1 class="text-center md-5">
        Create Tasks
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Create a new task
                </div>

                <div class="card-body">
                        <form action="/store-todo" method="POST" >
                            @csrf
                            <div class="form-group m-2">
                                <input type="text" placeholder="Name" name="name" class="form-control">

                            </div>
                            <div class="form-group m-2">
                                <textarea name="description" placeholder="Description"  cols="5" rows="6" class="form-control">

                                </textarea>

                            </div>
                            <div class="form-group text-center m-2">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection