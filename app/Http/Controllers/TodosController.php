<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){



        //fetch all todos in database
        //display them in the todos.index page

        

        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo){

        return view('todos.show')->with('todo', $todo);

    }

    public function create(){

        return  view('todos.create');
    }

    public function store(){
        // dd(request()->all());


        //validation
        $this->validate(request(),[
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success', 'Ask created successfully');


        return redirect('/todos');

    }

    public function edit(Todo $todo){
    // $todo = Todo::find($todoId);

    return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo){ 
        
            //validation
            $this->validate(request(),[
                'name' => 'required|min:6|max:12',
                'description' => 'required'
            ]);
    
            $data = request()->all();

        // $todo = Todo::find($todoId);

        $todo->name = $data["name"];
        $todo->description = $data["description"];
              
        //saving
        $todo->save();

        session()->flash('success', 'Ask updated successfully');

    return redirect('/todos');

    }

    public function destroy(Todo $todo){

        // $todo = Todo::find($todoId);

        $todo->delete();
        session()->flash('success', 'Ask deleted successfully');
        
        return redirect('/todos');

    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'Ask complete successfully');

        return redirect('/todos');
    }
}