<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Http\Resources\PacienteResource;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of all pacientes.
     * GET /api/pacientes
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return PacienteResource::collection($pacientes);
    }

    /**
     * Store a newly created paciente in storage.
     * POST /api/pacientes
     */
    public function store(Request $request)
    {
        // Validar datos de entrada
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:pacientes,email',
            'telefono' => 'nullable|string|max:20',
            'fecha_nacimiento' => 'nullable|date',
            'cedula' => 'required|string|unique:pacientes,cedula|max:20',
            'ciudad' => 'nullable|string|max:100',
            'direccion' => 'nullable|string',
            'historia_medica' => 'nullable|string',
        ]);

        // Crear paciente
        $paciente = Paciente::create($validated);

        // Retornar respuesta JSON-LD
        return response()->json(new PacienteResource($paciente), 201);
    }

    /**
     * Display the specified paciente.
     * GET /api/pacientes/{paciente}
     */
    public function show(Paciente $paciente)
    {
        return new PacienteResource($paciente);
    }

    /**
     * Update the specified paciente in storage.
     * PUT/PATCH /api/pacientes/{paciente}
     */
    public function update(Request $request, Paciente $paciente)
    {
        // Validar datos de entrada
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:pacientes,email,' . $paciente->id,
            'telefono' => 'nullable|string|max:20',
            'fecha_nacimiento' => 'nullable|date',
            'cedula' => 'sometimes|string|unique:pacientes,cedula,' . $paciente->id . '|max:20',
            'ciudad' => 'nullable|string|max:100',
            'direccion' => 'nullable|string',
            'historia_medica' => 'nullable|string',
        ]);

        // Actualizar paciente
        $paciente->update($validated);

        // Retornar respuesta JSON-LD
        return new PacienteResource($paciente);
    }

    /**
     * Remove the specified paciente from storage.
     * DELETE /api/pacientes/{paciente}
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        
        return response()->json([
            'message' => 'Paciente eliminado exitosamente',
            'success' => true
        ], 200);
    }
}