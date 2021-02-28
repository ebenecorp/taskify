<!DOCTYPE html>
<html>
<body>

<h1>My Todos</h1>
   <div>
        <ul>
            @foreach ($todos as $todo)
                <li>{{$todo->name}}</li>
            @endforeach
      
        </ul>
   </div>

</body>
</html>
