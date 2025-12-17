<?php


namespace App\Http\Controllers;

use App\Models\Cita;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['paciente','medico'])->get();
        return view('citas.index', compact('citas'));
    }

    public function show($id)
    {
        $cita = Cita::with(['paciente','medico'])->findOrFail($id);

        $jsonld = $cita->toJsonLd();

        return view('citas.show', compact('cita','jsonld'));
    }
}
