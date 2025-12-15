<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $fillable = [
        'fecha',
        'estado',
        'observaciones',
        'paciente_id',
        'medico_id'
    ];

    protected $casts = [
        'fecha' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /* Relaciones */
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    /* JSON-LD */
    public function toJsonLd()
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "MedicalAppointment",
            "startDate" => $this->fecha->format('Y-m-d H:i'),
            "status" => $this->estado,
            "patient" => [
                "@type" => "Person",
                "name" => $this->paciente->nombre
            ],
            "physician" => [
                "@type" => "Physician",
                "name" => $this->medico->nombre,
                "medicalSpecialty" => $this->medico->especialidad->nombre
            ]
        ];
    }
}
