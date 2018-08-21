<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Task;

class TasksController extends Controller
{

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

        #在创建任务后，自动将该任务设置为当前任务
        $last_current_task=Task::where('is_present',true)->first();
        $last_current_task->is_present=false;
        $last_current_task->save();

        $task->is_present = true;
        $task->save();

        return redirect()->route('tasks.show', [$task]);
    }

    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }


}
