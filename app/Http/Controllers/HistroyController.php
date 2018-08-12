<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistroyController extends Controller
{
    public function history()
    {
        return view('historys/history');
    }
}
