<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\EspecialidadController;

Route::get('/', function () {
    ;
});

// MÉDICOS (WEB)
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');
Route::get('/medicos/{id}', [MedicoController::class, 'show'])->name('medicos.show');

// PACIENTES
Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);

// CITAS
Route::get('/citas', [CitaController::class, 'index']);
Route::get('/citas/{id}', [CitaController::class, 'show']);

// ESPECIALIDADES
Route::get('/especialidades', [EspecialidadController::class, 'index']);
Route::get('/especialidades/{id}', [EspecialidadController::class, 'show']);
