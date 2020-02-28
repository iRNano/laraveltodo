<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
    	//view all todos
    	$todos = Todo::all();
    	return view('todos.index', compact('todos'));
    }

    public function create(){

    	return view('todos.create');
    }

    public function store(Request $request){
    	$todo = new Todo;
    	$todo->name = $request->name;
    	$todo->save();

    	return redirect('/todos');
    }

    public function destroy($id){
    	$todo = Todo::find($id);
    	$todo->delete();
    	return redirect('/todos');
    }

    public function edit($id){
    	$todo = Todo::find($id);
    	return view("todos.edit", compact('todo'));
    }

    public function update(Request $request, $id){ //$id came from route
    	$todo = Todo::find($id);
    	// dd($request);

    	// ($request->completed == 1)? $todo->isCompleted = 1 : $todo->name = $request->name;
    	// if($request->completed == 1){
    	// 	$todo->isCompleted = 1;	
    	// }else{
    		$todo->name = $request->name;
    	// }
	    	$todo->save();
    	return redirect('/todos');
    }

    public function complete (Request $request, $id){
    	$todo = Todo::find($id);
    	$todo->isCompleted = 1;
    	$todo->save();

    	return redirect('/todos');
    }

}
