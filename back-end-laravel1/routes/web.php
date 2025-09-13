<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class , 'home'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login-user');
Route::get('/internet',[AuthController::class, 'internet'])->name('internet-ativo');
