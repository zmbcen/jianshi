<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Task;

class TasksController extends Controller
{
    public function current_task()
    {
        return view('tasks/current_task');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)     #task任务做为一个资源，满足RESTful架构,创建任务
    {
        // $this->validate($request, [
        //     'name' => 'required|max:50',
        //     'email' => 'required|email|unique:users|max:255',
        //     'password' => 'required|confirmed|min:6'
        // ]);

        $task = Task::create([
            'company_name' => $request->company_name,
            'group_of_companies' => $request->group_of_companies,
            'principal' => $request->principal,
            'phone_number_of_principal' => $request->phone_number_of_principal,
            'function_of_company' => $request->function_of_company,
            'name_prepaper' => $request->name_prepaper,
            'position_prepaper' => $request->position_prepaper,
            'title_prepaper' => $request->title_prepaper,
            'education_background_prepaper' => $request->education_background_prepaper,
            'phone_number_of_prepaper' => $request->phone_number_of_prepaper,

        ]);

        return redirect()->route('tasks.show', [$task]);
    }

    public function show(Task $task)
    {
        return view('tasks.show_task',compact('task'));
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


}
