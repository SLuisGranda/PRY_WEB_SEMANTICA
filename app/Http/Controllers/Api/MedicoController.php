<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        return response()->json([
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "itemListElement" => Medico::all()->map(fn($m) => $m->toJsonLd())
        ]);
    }

    public function show($id)
    {
        $medico = Medico::findOrFail($id);

        return response()->json([
            "@context" => "https://schema.org",
            "@type" => "Physician",
            "name" => $medico->name,
            "email" => $medico->email,
            "medicalSpecialty" => $medico->speciality,
            "telephone" => $medico->phone,
        ]);
    }
}
