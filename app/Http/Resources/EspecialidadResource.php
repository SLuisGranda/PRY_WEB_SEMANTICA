<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EspecialidadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // Contexto y tipo JSON-LD
            '@context' => 'https://schema.org',
            '@type' => 'MedicalSpecialty',
            '@id' => route('api.especialidades.show', $this->id),
            
            // Identificador único
            'identifier' => [
                '@type' => 'PropertyValue',
                'propertyID' => 'Código',
                'value' => $this->codigo
            ],
            
            // Información de la especialidad
            'name' => $this->nombre,
            'description' => $this->descripcion,
            
            // Campo médico
            'medicalField' => 'Medicine',
            'areaServed' => $this->area_medica,
            
            // Metadata
            'dateCreated' => $this->created_at->toIso8601String(),
            'dateModified' => $this->updated_at->toIso8601String(),
        ];
    }
}