<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ship;

class ShipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.staff');
    }
    public function index() {
    	$ships = Ship::all();
    	return view('ships.index',compact('ships'));
    }

    public function create() {
    	$ship = new Ship;
    	return view('ships.create',compact('ship'));
    }

    public function store(Request $request) {
    	$ship = Ship::create($request->all());
    	return redirect('ships');
    }

    public function edit(Ship $ship) {
    	return view('ships.edit',compact('ship'));    	
    }

    public function update(Ship $ship, Request $request) {
    	$ship->update($request->all());
    	$ship->save();
    	return redirect('ships');
    }
}
