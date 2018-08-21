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
        $this->set_present_task($task);
        session()->flash('success',"您已成功创建任务！（默认将该任务设置为当前任务）");

        return redirect()->route('tasks.show', [$task]);
    }

    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }

    public function update(Task $task,Request $request)
    {
        #如果含有task_id，则说明是点击的设为当前任务提交的表单
        if($request->has('task_id'))
        {
            $this->set_present_task($task);
            session()->flash('success',"成功将本任务设置为当前任务");
            return redirect()->route('tasks.show',$task->id);
        }
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function get_present_task()
    {
        $task = Task::where('is_present',true)->first();
        // return view('tasks.show',compact('task'));
        return redirect()->route('tasks.show',$task->id);

    }

    protected function set_present_task($task)
    {
        $last_current_task=Task::where('is_present',true)->first();
        $last_current_task->is_present=false;
        $last_current_task->save();

        $task->is_present = true;
        $task->save();
    }


}
