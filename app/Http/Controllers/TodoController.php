<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{


  public function index(){

    $todos=Todo::all();
    return view('todos.index')->with('todos',$todos);
  }



  public function show($todoid){
    $todo=Todo::find($todoid);
    return view('todos.show')->with('showtodo',$todo);
}


public function creat(){
  return view('todos.creat');
}


public function store(){

  $this->validate(request(),[
    'name'=>'required|min:6',
    'description'=>'required'
  ]);

$data=request()->all();
$newtodo=new Todo();
$newtodo->name=$data['name'];
$newtodo->description=$data['description'];
$newtodo->completed=false;
session()->flash('success','Todo created successfully');

$newtodo->save();

return redirect('/todos');

}

public function edit(Todo $todo){

return view('todos.edit')->with('todoValues',$todo);
}

public function update(Todo $todo){

$this->validate(request(),[
  'name'=>'required',
  'description'=>'required'
]);
$data=request()->all();


$todo->name=$data['name'];
$todo->description=$data['description'];
$todo->save();
session()->flash('success','Todo updated successfully');
return redirect('/todos');


}

public function delete(Todo $todo){

  $todo->delete();
  session()->flash('success','Todo deleted successfully');

  return redirect('/todos');
}

public function complete(Todo $todo){

  $todo->completed=true;
  $todo->save();
  session()->flash('success','Well done todo completed!');
return redirect('/todos');
}

}
