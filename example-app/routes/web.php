<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

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

use App\Http\Controllers\BichoController;

Route::prefix('jogos')->group(function(){

    Route::get('/dashboard', [JogosController::class, 'index'])->name('jogos-index');
    
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');

    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
});




Route::get('/bicho/create', [BichoController::class, 'create']);


Route::get('/', function () {
    return view('welcomeb');
});

Route::get('/welcome', function () {
    return view('welcomeb');
});
Route::post('/bicho', [BichoController::class, 'store']);

//Route::get('/dashboard', function () {
//    return view('/bicho/index');
//});

Route::get('/dashboard', [JogosController::class, 'index'])->name('jogos-index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
