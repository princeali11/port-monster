<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\Port;

class Container extends Model
{


    protected $guarded = ['id'];

    
    public function ship() {
    	return $this->belongsTo(Port::class);
    }

    public function bookings() {
     	return $this->hasMany(Booking::class);
    }
}
