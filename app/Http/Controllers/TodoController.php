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

    public function show(Todo $todo){

        return view('todos.show')->with('todo', $todo);
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

        session()->flash('success', 'Task was successfully added');

        return redirect('/todos');

    }

    public function edit(Todo $todo){
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

        session()->flash('success', 'Task was successfully updated');

        return redirect('/todos');

    }

    public function destroy(Todo $todo){
        // dd($id);
        $todo->delete();
        
        session()->flash('success', 'Task was successfully deleted');

        return redirect('/todos');
    }

    public function complete(Todo $todo){
        // dd($id);
        $todo->completed = true;
        $todo->save();
        
        session()->flash('success', 'Task was successfully completed');

        return redirect('/todos');
    }



}
