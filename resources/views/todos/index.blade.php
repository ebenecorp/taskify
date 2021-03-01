<!DOCTYPE html>
<html>
    <head>
        <title>
                taskify
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <!-- CSS only -->
<body>

<div class="container">
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
 </div>
</body>
</html>