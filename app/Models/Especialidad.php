<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Especialidad extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla
     */
    protected $table = 'especialidades';

    /**
     * Atributos que pueden ser asignados en masa
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo',
        'area_medica'
    ];

    /**
     * Atributos que deben ser convertidos a tipos nativos
     */
    protected $casts = [
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