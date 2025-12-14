<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use App\Http\Resources\EspecialidadResource;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of all especialidades.
     * GET /api/especialidades
     */
    public function index()
    {
        $especialidades = Especialidad::all();
        return EspecialidadResource::collection($especialidades);
    }

    /**
     * Store a newly created especialidad in storage.
     * POST /api/especialidades
     */
    public function store(Request $request)
    {
        // Validar datos de entrada
        $validated = $request->validate([
            'nombre' => 'required|string|unique:especialidades,nombre|max:255',
            'descripcion' => 'nullable|string',
            'codigo' => 'required|string|unique:especialidades,codigo|max:50',
            'area_medica' => 'nullable|string|max:100',
        ]);

        // Crear especialidad
        $especialidad = Especialidad::create($validated);

        // Retornar respuesta JSON-LD
        return response()->json(new EspecialidadResource($especialidad), 201);
    }

    /**
     * Display the specified especialidad.
     * GET /api/especialidades/{especialidad}
     */
    public function show(Especialidad $especialidad)
    {
        return new EspecialidadResource($especialidad);
    }

    /**
     * Update the specified especialidad in storage.
     * PUT/PATCH /api/especialidades/{especialidad}
     */
    public function update(Request $request, Especialidad $especialidad)
    {
        // Validar datos de entrada
        $validated = $request->validate([
            'nombre' => 'sometimes|string|unique:especialidades,nombre,' . $especialidad->id . '|max:255',
            'descripcion' => 'nullable|string',
            'codigo' => 'sometimes|string|unique:especialidades,codigo,' . $especialidad->id . '|max:50',
            'area_medica' => 'nullable|string|max:100',
        ]);

        // Actualizar especialidad
        $especialidad->update($validated);

        // Retornar respuesta JSON-LD
        return new EspecialidadResource($especialidad);
    }

    /**
     * Remove the specified especialidad from storage.
     * DELETE /api/especialidades/{especialidad}
     */
    public function destroy(Especialidad $especialidad)
    {
        $especialidad->delete();
        
        return response()->json([
            'message' => 'Especialidad eliminada exitosamente',
            'success' => true
        ], 200);
    }
}