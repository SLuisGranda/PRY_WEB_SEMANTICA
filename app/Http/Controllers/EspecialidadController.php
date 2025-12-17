<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Http\Resources\EspecialidadResource;

class EspecialidadController extends Controller
{
    // WEB y API
    public function index()
    {
    $especialidades = Especialidad::all();
    return view('especialidades.index', compact('especialidades'));
        
    }

    public function show($id)
    {
    $especialidad = Especialidad::findOrFail($id);
    return view('especialidades.show', compact('especialidad'));
        ;
    }
}
