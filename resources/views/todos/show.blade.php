<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taskify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
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
    
</body>
</html>