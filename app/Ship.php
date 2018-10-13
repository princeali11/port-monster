<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Schedule;

class Ship extends Model
{
    protected $fillable = ['name','reg_no'];

    public function schedules() {
    	return $this->hasMany(Schedule::class);
    }
}
