<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\BichoController;

Route::prefix('jogos')->group(function(){

    
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');

    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
});


Route::get('/bicho/roleta', [BichoController::class, 'roleta'])->name('bicho.roleta');

Route::get('/bicho/jogobicho', [BichoController::class, 'jogo'])->name('bicho.jogobicho');

Route::get('/dashboard', [BichoController::class, 'index'])->name('jogos-index');


Route::get('/bicho/create', [BichoController::class, 'create']);


Route::get('/', function () {
    return view('welcomeb');
});

Route::get('/welcome', function () {
    return view('welcomeb');
});
Route::post('/bicho', [BichoController::class, 'store']);


Route::get('/dashboard', [JogosController::class, 'index'])->name('jogos-index');

Route::get('/logout', [ProfileController::class, 'logout'])->name('login.logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/JogoBicho', ['as'=>'jogo.bicho', 'uses'=>'App\Http\Controllers\JogoBichoController@index']);

Route::post('/diminuir-saldo/{valor}', [BichoController::class, 'diminuirSaldo'])->name('diminuir-saldo');
Route::post('/aumentar-saldo/{valor}', [BichoController::class, 'aumentarSaldo'])->name('aumentar-saldo');
Route::post('/depositar-saldo/{valor}', [BichoController::class, 'depositarSaldo'])->name('depositar-saldo');

require __DIR__.'/auth.php';
