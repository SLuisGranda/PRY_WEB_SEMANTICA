<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nombre',
        'cedula',
        'telefono',
        'email',
        'especialidad_id'
    ];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    // JSON-LD
    public function toJsonLd()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "Physician",
            "name" => $this->nombre,
            "identifier" => $this->cedula,
            "telephone" => $this->telefono,
            "email" => $this->email,
            "medicalSpecialty" => $this->especialidad->nombre
        ];
    }
}
