<?php

namespace App;

use App\Customer;
use App\Schedule;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $fillable = ['customer_id','schedule_id','weight','quantity','status'];

	public function customer() {
		return $this->belongsTo(Customer::class);
	}

	public function schedule() {
		return $this->belongsTo(Schedule::class);
	}
}
