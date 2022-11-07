<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDoModel;
use Illuminate\Support\Facades\Redirect;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos = ToDoModel::all();
        $todos = ToDoModel::orderBy('created_at', 'desc')->get();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'body' => 'required',
            'due' => 'required'
        ]);

        $todo = new ToDoModel;
        $todo->text =  $request->post('text');
        $todo->body = $request->post('body');
        $todo->due = $request->post('due');
        $todo->save();

        return redirect('/')->with('success', 'Added todo successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = ToDoModel::find($id);
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = ToDoModel::find($id);
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = ToDoModel::find($id);
        $todo->text = $request->post('text');
        $todo->body = $request->post('text');
        $todo->text = $request->post('text');
        $todo->save();

        return redirect('/')->with('success', 'Todo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = ToDoModel::find($id);
        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted successfully');
    }
}
