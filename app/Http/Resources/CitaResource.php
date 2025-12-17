<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CitaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalAppointment',
            '@id' => url()->current(),

            'startDate' => $this->fecha?->format('Y-m-d H:i:s'),
            'status' => $this->estado,
            'description' => $this->observaciones,

            'patient' => [
                '@type' => 'Person',
                'name' => $this->paciente->nombre ?? null,
            ],

            'physician' => [
                '@type' => 'Physician',
                'name' => $this->medico->nombre ?? null,
            ]
        ];
    }
}
