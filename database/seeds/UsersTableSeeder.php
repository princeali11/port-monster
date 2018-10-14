<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'     => 'jobizzness@gmail.com',
            'name'      => 'matarr jobe',
            'password'  => bcrypt('biness'),
            'user_type' => 'staff'
        ]);
    }
}
