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
Route::resource('container','ContainerController');
Route::resource('port','PortController');

Route::get('port/{port}/delete', 'PortController@destroy');

Route::resource('users','UserController');
Route::resource('customers','CustomerController');
Route::resource('bookings','BookingController');

Route::get('settings','SettingController@index');
Route::post('settings/updatepass','SettingController@updatepass');




