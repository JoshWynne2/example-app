<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/rat', function () {
	return "rats rats we're the rats we pray at night we stalk at night we're the rats im the giant rat that makes all of the rules";
});

Route::get('/josh', function () {
	return view('hello');
});