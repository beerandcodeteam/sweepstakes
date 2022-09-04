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
    return view('sweepstakes.index');
})->middleware('auth');

Route::get('/show', function () {
    return view('sweepstakes.show');
})->middleware('auth');

Route::get('/create', function () {
    return view('sweepstakes.create');
})->middleware('auth');

Route::get('/edit', function () {
    return view('sweepstakes.edit');
})->middleware('auth');

Route::get('/register', function () {
    return view('sweepstakes.register');
})->middleware('auth');
