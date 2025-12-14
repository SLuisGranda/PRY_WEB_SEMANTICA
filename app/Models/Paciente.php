<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla
     */
    protected $table = 'pacientes';

    /**
     * Atributos que pueden ser asignados en masa
     */
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'fecha_nacimiento',
        'cedula',
        'direccion',
        'ciudad',
        'historia_medica'
    ];

    /**
     * Atributos que deben ser convertidos a tipos nativos
     */
    protected $casts = [
        'fecha_nacimiento' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Atributos ocultos para arrays/JSON
     */
    protected $hidden = [];

    /**
     * Obtener el formato de fecha para serialización
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
}