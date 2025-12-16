<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cita;

class CitaController extends Controller
{
    public function show($id)
    {
        $cita = Cita::with(['paciente', 'medico'])->findOrFail($id);

        return response()->json($cita->toJsonLd());
    }
}
