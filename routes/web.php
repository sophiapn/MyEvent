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


Route::get('/welcome', function () {
    return view('welcome');
});

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

Route::get('/eo_home', function () {
    return view('eo/eo_home');
});

Route::get('/eo_base', function () {
    return view('eo/eo_base');
});

Route::get('/user_home', function () {
    return view('/user/home/base');
});

Route::resource('/bayar', 'PembayaranController');

/** User */
Route::get('/index', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
