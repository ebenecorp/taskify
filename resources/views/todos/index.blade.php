
@extends('layouts.app')

@section('title')
Taskify: List of Tasks    
@endsection

@section('content')

    <h1 class="text-center m-2"> Taskify</h1>
 <div class="row justify-content-center">
     <div class="col-md-8">
                <div class="card card-default">
                    <div class="card card-header">
                        My Tasks
                    </div>
                    <div class="card-body">

                        <ul class="list-group">
                            @foreach ($todos as $todo)
                                <li class="list-group-item">
                                    {{$todo->name}}
                                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm pull-right">View</a>

                                </li>
                            @endforeach
                    
                        </ul>
                    </div>
                </div>
            </div>
     </div>
    
@endsection
 