<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/active-directory-login', 'HomeController@adlogin');

Route::get('/home', 'HomeController@index');
Route::resource('ships','ShipController');
Route::resource('schedules','ScheduleController');
Route::resource('users','UserController');
Route::resource('customers','CustomerController');
Route::get('settings','SettingController@index');
Route::post('settings/updatepass','SettingController@updatepass');

Route::get('bookings','BookingController@index');
Route::get('bookings/create','BookingController@create');
Route::get('bookings/create/{schedule}','BookingController@showform');
Route::post('bookings/create/{schedule}','BookingController@store');
Route::get('bookings/{booking}','BookingController@show');
Route::get('bookings/{booking}/edit','BookingController@edit');
Route::put('bookings/{booking}','BookingController@update');


