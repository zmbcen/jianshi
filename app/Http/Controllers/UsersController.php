<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function home()
    {
        return view('users/home');
    }


    public function setting()
    {
        return view('users/settings/setting');
    }

}
