<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateDatabaseController extends Controller
{
    public function update_database()
    {
        return view('update_database_s/update_database');
    }
}
