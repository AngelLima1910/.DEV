<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clients;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/', [Users::class, 'agregarUsuario']);
Route::get('/inicio', [Clients::class, 'index'])->name('inicio');