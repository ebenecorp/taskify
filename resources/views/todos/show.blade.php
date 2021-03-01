@extends('layouts.app')


@section('title')
Task: {{$todo->name}}   
@endsection


@section('content')
    <div class="container">
        <h1 class="text-center m-2"> Task Details</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                            <div class="card card-default">
                                <div class="card card-header">
                                    {{$todo->name}}
                                </div>
                                <div class="card-body">
                                  {{$todo->description}}              
                        </div>
                    </div>
                </div>
        </div>
 </div>
@endsection
