<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\Ship;

class Schedule extends Model
{
    protected $fillable = ['ship_id','departure_time','departure_port','capacity','warehouse'];

    protected $dates = ['departure_time'];

    
    public function ship() {
    	return $this->belongsTo(Ship::class);
    }

    public function bookings() {
     	return $this->hasMany(Booking::class);
    }
}
