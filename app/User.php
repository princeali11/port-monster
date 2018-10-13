<?php

namespace App;

use App\Customer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function isAgent() {
        return $this->user_type == 'agent' ? true : false;
    }

    public function isStaff() {
        return $this->user_type == 'staff' ? true : false;
    }

}
