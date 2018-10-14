<?php

namespace App;

use App\Customer;
use App\Container;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $guarded = ['id'];

	protected $casts = [

    ];

	protected $dates = ['shipping_date'];

	public function customer() {
		return $this->belongsTo(Customer::class);
	}

	public function schedule() {
		return $this->belongsTo(Container::class);
	}
}
