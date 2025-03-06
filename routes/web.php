<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest', 'prevent.back.history')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/loggear', [AuthController::class, 'loggear'])->name('loggear');
});

Route::middleware('auth','prevent.back.history','rol:contador')->group(function(){
    Route::get('/contador', [AuthController::class, 'contador'])->name('contador');
});

Route::middleware('auth','prevent.back.history','rol:caja')->group(function(){
    Route::get('/caja', [AuthController::class, 'caja'])->name('caja');
});
Route::middleware('auth','prevent.back.history','rol:administrador')->group(function(){
    Route::get('/home', [AuthController::class, 'home'])->name('home');
});

Route::middleware('auth')->get('/logout', [AuthController::class, 'logout'])->name('logout');
