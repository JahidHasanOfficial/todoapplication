<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //=====index=============
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    //=============create===============
    public function create(){
        return view('tasks.create');
    }

    //==========store==============
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' =>'required|max:255'
        ]);
        Task::create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task create successfully');
    }

    // //==========show=============
    public function show(Task $task){
        return view('tasks.show',compact('task'));
    }

    //========Edit===================
    public function edit(Task $task){
        return view('tasks.edit',compact('task'));
    }

    //=======Update============================
    public function update(Request $request, Task $task){
        $validatedData = $request->validate([
            'title' => 'required|max:255'
        ]);
        $task->update($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task Update Successfully');
    }
}
 