<?php

namespace App\Http\Controllers;

use App\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.staff');
    }
    public function index() {

    	return view('container.index', [
            'containers'    => Container::all()
        ]);
    }

    public function create() {

    	return view('container.create', [
    	    'data'      => new \stdClass()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {

        Container::create($request->all());
    	return redirect(route('container.index'));
    }

    public function edit(Container $container) {
    	return view('container.edit', [
    	    'data'      => $container
        ]);
    }

    public function update(Container $container, Request $request) {
    	$container->update($request->all());
    	$container->save();
    	return redirect('container');
    }
}
