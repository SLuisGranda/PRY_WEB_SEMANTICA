<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = User::where('role', 'MEDICO')->get();
        return view('medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        
        $medico =User::findOrFail($userId);

        $jsonld = [
            "@context" => "https://schema.org",
            "@type" => "Physician",
            "name" => $medico->name,
            "email" => $medico->email,
            "telephone" => $medico->phone,
            "medicalSpecialty" => $medico->specialty,
           
            // Add other relevant properties as needed
            
        ];

        $data = [
            'jsonld' => $jsonld,
            'medico' => $medico,
        ];
        return  view('medicos.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
