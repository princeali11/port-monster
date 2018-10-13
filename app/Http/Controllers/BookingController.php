<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Schedule;
use App\Customer;
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

    public function create(Request $request) {
    	$date = date("Y-m-d H:i:s");
    	$weight = "";
    	$quantity = "";
    	if ($request->has('departure_time')) {
    		$date = $request->input('departure_time');
    	}
    	$schedules = Schedule::where('departure_time','>',$date)->get();
        $date = Carbon::parse($date);
    	return view('bookings.create',compact('schedules','date','weight','quantity'));
    	// return view('bookings.)
    }

    public function showform($schedule_id) {
    	$customers = Customer::all();
        $booking = new Booking;
    	return view('bookings.showform',compact('schedule_id','customers','booking'));
    }

    public function store(Schedule $schedule, Request $request) {
        $schedule->bookings()->create($request->all());
        return redirect('bookings');
    }

    public function show(Booking $booking) {
        return view('bookings.show',compact('booking'));
    }

    public function edit(Booking $booking) {
        $customers = Customer::all();
        return view('bookings.edit',compact('customers','booking'));
    }

    public function update(Booking $booking, Request $request) {
        $booking->update($request->all());
        return redirect('bookings');
    }
}
