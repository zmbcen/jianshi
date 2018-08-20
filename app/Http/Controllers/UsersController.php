<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'account_owner' => 'required|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'account_owner'=>$request->account_owner,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('success','感谢您注册鉴势，鉴势将竭诚为您服务~');
        return redirect()->route('users.show', [$user->id]);
    }

}
