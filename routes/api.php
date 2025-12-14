<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\Api\EspecialidadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')->group(function () {
    /**
     * Rutas para Pacientes
     * Proporciona endpoints CRUD con respuestas en formato JSON-LD
     */
    Route::apiResource('pacientes', PacienteController::class)->names('api.pacientes');
    
    /**
     * Rutas para Especialidades
     * Proporciona endpoints CRUD con respuestas en formato JSON-LD
     */
    Route::apiResource('especialidades', EspecialidadController::class)->names('api.especialidades');
});