<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Ship;
class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.staff');
    }
    
    public function index() {
    	$schedules = Schedule::all();
    	return view('schedules.index', compact('schedules'));
    }

    public function create() {
    	$schedule = new Schedule;
    	$ships = Ship::all();
    	return view('schedules.create', compact('schedule','ships'));	
    }

    public function store(Request $request) {
    	$ship = Ship::findOrFail($request->input('ship_id'));
    	$ship->schedules()->create($request->all());    	
    	return redirect('schedules');
    }

    public function edit(Schedule $schedule) {
    	$ships = Ship::all();
    	return view('schedules.edit', compact('schedule','ships'));
    }

    public function update(Schedule $schedule, Request $request) {
        $schedule->update($request->all());
        $schedule->save();
        return redirect('schedules');
    }
}
