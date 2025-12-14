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
        Schema::create('especialidades', function (Blueprint $table) {
            $table->id();
            
            // Información de la especialidad
            $table->string('nombre', 255)->required()->unique();
            $table->text('descripcion')->nullable();
            $table->string('codigo', 50)->unique();
            $table->string('area_medica', 100)->nullable();
            
            // Timestamps
            $table->timestamps();
            
            // Índices para búsquedas rápidas
            $table->index('nombre');
            $table->index('codigo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidades');
    }
};