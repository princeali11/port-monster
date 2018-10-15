<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Container;
use App\Customer;
use App\Port;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
	protected $status;

	public function __construct()
    {
    	$this->status = ['On the sea','Reached'];
        $this->middleware('auth');
    }
    public function index() {
    	$bookings = Booking::all();
    	return view('bookings.index',compact('bookings'));
    }

    public function create() {
    	return view('bookings.create', [
    	    'ports'         => Port::all(),
            'containers'    => Container::all(),
            'booking'       => new \stdClass()
        ]);
    }

    public function showform($schedule_id) {
    	$customers = Customer::all();
        $booking = new Booking;
    	return view('bookings.showform',compact('schedule_id','customers','booking'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        Booking::create(
            array_merge($request->all(),
                ['customer_id' => auth()->user()->id]
            )
        );
        return redirect('bookings');
    }

    public function show(Booking $booking) {
        return view('bookings.show',compact('booking'));
    }

    public function edit(Booking $booking) {
        return view('bookings.edit', [
            'ports'         => Port::all(),
            'containers'    => Container::all(),
            'booking'       =>  $booking
        ]);
    }

    public function update(Booking $booking, Request $request) {
        $booking->update($request->all());
        return redirect('bookings');
    }
}
