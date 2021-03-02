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

        $this->validate($request, [
            'name'=>'required',
            'description'=> 'required'
        ] );

        $data = $request->all();

        $todo = Todo::create($data);

        $todo->save();

        return redirect('/todos');

    }

    public function edit($id){
        $todo = Todo::find($id);

        return view('todos.edit')->with('todo', $todo);

    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=>'required',
            'description'=> 'required'
        ] );

        $data = $request->all();

        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->update();

        return redirect('/todos');

    }

    public function destroy($id){
        // dd($id);
        Todo::destroy($id);

        return redirect('/todos');
    }



}
