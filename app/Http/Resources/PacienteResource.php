<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
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
            '@type' => 'Person',
            '@id' => route('api.pacientes.show', $this->id),
            
            // Identificador único
            'identifier' => [
                '@type' => 'PropertyValue',
                'propertyID' => 'Cédula',
                'value' => $this->cedula
            ],
            
            // Datos personales básicos
            'givenName' => explode(' ', $this->nombre)[0] ?? $this->nombre,
            'familyName' => implode(' ', array_slice(explode(' ', $this->nombre), 1)) ?? '',
            'name' => $this->nombre,
            
            // Información de contacto
            'email' => $this->email,
            'telephone' => $this->telefono,
            
            // Datos demográficos
            'birthDate' => $this->fecha_nacimiento ? $this->fecha_nacimiento->toIso8601String() : null,
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $this->direccion,
                'addressLocality' => $this->ciudad,
                'addressCountry' => 'EC'
            ],
            
            // Historia médica como descripción
            'description' => $this->historia_medica,
            
            // Metadata
            'dateCreated' => $this->created_at->toIso8601String(),
            'dateModified' => $this->updated_at->toIso8601String(),
        ];
    }
}