<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MedicoController::class, 'index']);
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('/medicos/{id}', [MedicoController::class, 'show'])->name('medicos.show');
