<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            
            // Datos personales
            $table->string('nombre', 255)->required();
            $table->string('email', 255)->unique();
            $table->string('telefono', 20)->nullable();
            
            // Datos médicos específicos
            $table->date('fecha_nacimiento')->nullable();
            $table->string('cedula', 20)->unique();
            $table->string('ciudad', 100)->nullable();
            $table->text('direccion')->nullable();
            
            // Historia médica
            $table->longText('historia_medica')->nullable();
            
            // Timestamps
            $table->timestamps();
            
            // Índices para búsquedas rápidas
            $table->index('cedula');
            $table->index('email');
            $table->index('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};