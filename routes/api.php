<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\Api\EspecialidadController;
use App\Http\Controllers\Api\MedicoController;
use App\Http\Controllers\Api\CitaController;


Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::get('/medicos/{id}', [MedicoController::class, 'show']);
Route::get('/especialidades/{id}', [EspecialidadController::class, 'show']);
Route::get('/citas/{id}', [CitaController::class, 'show']);
