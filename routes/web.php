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

Route::get('/performances', function () {
    return view('performances');
});

Route::get('/instructors', function () {
    return view('instructors');
});

//Route::get('/heidi', function () {
//    return view('heidi');
//});

Route::get('/tickets', function () {
    return view('tickets');
});

Route::get('/news', function () {
    return view('news');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
