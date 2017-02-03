<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', 'CUser@send_email');

Route::auth();

//Routing get
Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/home', function () {
    return view('pilkada.index');
});
Route::get('/2017', function () {
    return view('pilkada.2017');
});
Route::get('2017', function () {
    return view('pilkada.2017');
});

Route::get('/detailsuara/{id_daerah}', 'CPilkada@getdatapilkada');