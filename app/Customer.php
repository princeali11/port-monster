<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Customer extends Model
{
    protected $fillable = ['name','company_name','contact','email'];

    public function agent() {
		return $this->belongsTo(User::class);
	}
}
