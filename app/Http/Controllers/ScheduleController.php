<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Container;
use App\Port;
class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.staff');
    }
    
    public function index() {
    	$schedules = Container::all();
    	return view('schedules.index', compact('schedules'));
    }

    public function create() {
    	$schedule = new Container;
    	$ships = Port::all();
    	return view('schedules.create', compact('schedule','ships'));	
    }

    public function store(Request $request) {
    	$ship = Port::findOrFail($request->input('ship_id'));
    	$ship->schedules()->create($request->all());    	
    	return redirect('schedules');
    }

    public function edit(Container $schedule) {
    	$ships = Port::all();
    	return view('schedules.edit', compact('schedule','ships'));
    }

    public function update(Container $schedule, Request $request) {
        $schedule->update($request->all());
        $schedule->save();
        return redirect('schedules');
    }
}
