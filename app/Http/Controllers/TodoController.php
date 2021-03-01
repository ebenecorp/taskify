<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //

    public function index(){

        return view('todos.index')->with('todos' , Todo::all());
    }

    public function show($id){

        return view('todos.show')->with('todo', Todo::find($id));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $todo = Todo::create($data);

        $todo->save();

        return redirect('/todos');

    }

}
