<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admins;
use App\Http\Controllers\Creditos;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get ('/agregarUsuario', [AuthController::class, 'agregarUsuario']);

Route::get('/inicio', [Admins::class, 'index'])->name('inicio');
Route::get('/lista', [Admins::class, 'lista'])->name('lista');

Route::get('/create', [Admins::class, 'create'])->name('agregarEstudiante');
Route::post('/store', [Admins::class, 'store'])->name('registroNuevo');
Route::get('/show/{id}', [Admins::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Admins::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [Admins::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Admins::class, 'update'])->name('update');

Route::get('/creditos', [Creditos::class, 'index'])->name('creditos');
Route::get('/agregarCredito', [Creditos::class, 'agregarCredito'])->name('creditoNuevo');
Route::post('/guardar', [Creditos::class, 'guardarArchivos'])->name('guardarArchivos');
Route::get('/mostrarCreditos/{id}', [Creditos::class, 'mostrarCreditos'])->name('mostrarCreditos');
Route::delete('/eliminarCreditos/{id}', [Creditos::class, 'eliminarCreditos'])->name('eliminarCreditos');
Route::get('/editar/{id}', [Creditos::class, 'editarArchivos'])->name('editarArchivos');
Route::put('/actualizar/{id}', [Creditos::class, 'actualizarArchivos'])->name('actualizarArchivos');