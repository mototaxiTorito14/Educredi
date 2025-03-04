<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/loggear', [AuthController::class, 'loggear'])->name('loggear');
Route::get('/home', [AuthController::class, 'home'])->name('home');
