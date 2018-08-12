<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function current_task()
    {
        return view('static_pages/current_task');
    }

    public function add_task()
    {
       return view('static_pages/add_task');
    }

    public function history()
    {
        return view('static_pages/history');
    }

    public function update_database()
    {
        return view('static_pages/update_database');
    }

    public function setting()
    {
        return view('static_pages/setting');
    }

}
