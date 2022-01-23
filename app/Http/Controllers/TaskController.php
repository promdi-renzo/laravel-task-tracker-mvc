<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return view('welcome', ['listTask' => Task::all()]);
    }

    public function edit($id)
    {
        return view('edit', ['task' => Task::find($id)]);
    }

    public function saveTask(Request $request)
    {
        $temp = new Task;
        $temp->content = $request->content;
        $temp->completed = 0;
        $temp->save();

        return redirect('/');
    }

    public function deleteTask($id)
    {
        $temp = new Task;
        $temp->destroy($id);

        return redirect('/');
    }

    public function updateTask(Request $request, $id)
    {
        $temp = Task::find($id);
        $temp->content = $request->content;
        $temp->save();

        return redirect('/');
    }
}
