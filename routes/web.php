<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/tickets', function () {
    return view('pages.tickets');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/settings', function () {
    return view('pages.settings');
});


