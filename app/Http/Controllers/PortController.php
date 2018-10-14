<?php

namespace App\Http\Controllers;

use App\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    /**
     * PortController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth.staff');
    }

    public function index() {

        return view('port.index', [
            'ports'     => Port::all()
        ]);
    }

    public function create() {

        return view('port.create', [
            'data'  => new \stdClass()
        ]);
    }

    public function store(Request $request) {
       Port::create($request->all());
        return redirect('port');
    }

    public function edit(Port $port) {
        return view('port.edit', [
            'data'  => $port
        ]);
    }

    public function update(Port $port, Request $request) {
        $port->update($request->all());
        $port->save();
        return redirect('port');
    } //

    public function destroy(Port $port ){
        if($port){
            $port->delete();
        }
        return redirect(route('port.index'));
    }
}
