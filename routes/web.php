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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/eo', function () {
    return view('eo');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/event', function () {
    return view('event');
});

/*Route::post('/customers', 'CustomersController@index');*/

Route::resource('/bayar', 'CustomersController');
