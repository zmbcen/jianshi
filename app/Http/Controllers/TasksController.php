<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function current_task()
    {
        return view('tasks/current_task');
    }

    public function add_task()
    {
       return view('tasks/add_task');
    }

}
