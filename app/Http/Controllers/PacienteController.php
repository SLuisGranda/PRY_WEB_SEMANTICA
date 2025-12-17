<?php

namespace App\Http\Controllers;

use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        $jsonld = [
            "@context" => "https://schema.org",
            "@type" => "Person",
            "name" => $paciente->nombre,
            "email" => $paciente->email,
            "telephone" => $paciente->telefono,
            "birthDate" => $paciente->fecha_nacimiento,
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => $paciente->ciudad,
                "streetAddress" => $paciente->direccion,
                "addressCountry" => "EC"
            ]
        ];

        return view('pacientes.show', compact('paciente', 'jsonld'));
    }
}
