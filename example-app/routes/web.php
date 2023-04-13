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
}) ->name('site.home');

Route::get('/cassino', function () {
    return view('cassino');
}) ->name('site.cassino');

Route::get('/apostas', function () {
    return view('apostas');
}) ->name('site.apostas');

Route::get('/sobre', function () {
    return view('sobre');
}) ->name('site.sobre');

