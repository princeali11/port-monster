<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.staff');
    }
    
    public function index() {
    	$users = User::all();
    	return view('users.index',compact('users'));
    }

    public function create() {
    	$user = new User;
    	return view('users.create',compact('user'));
    }

    public function store(Request $request) {
    	$user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_type = 'agent';
        $user->password = Hash::make($request->input('password'));
        $user->save();
    	return redirect('users');
    }

    public function edit(User $user) {
    	return view('users.edit',compact('user'));    	
    }

    public function update(User $user, Request $request) {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    	return redirect('users');
    }
}
