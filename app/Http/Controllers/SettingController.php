<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SettingController extends Controller
{

	function __construct()
	{
		$this->middleware('auth');
	}
    public function index() {
    	$user = Auth::user();
    	return view('settings.index',compact('user'));
    }

    public function updatepass(Request $request) {
    	if (!$request->input('new_password') == $request->input('confirm_password')) {
    		return redirect('settings');
    	}
    	$this->user->password = Hash::make($request->input('new_password'));
    	$this->user->save();
    	return redirect('settings');
    }
}
