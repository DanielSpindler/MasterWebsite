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
    return view('home');
})->name('home');

Route::get('/datenschutzerklarung', function () {
    return view('datenschutzerklarung');
})->name('dataSecurity');

Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');
