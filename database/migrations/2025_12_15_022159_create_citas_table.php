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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();

            // Fecha y estado de la cita
            $table->dateTime('fecha');
            $table->string('estado', 50)->default('pendiente');
            $table->text('observaciones')->nullable();

            // Relaciones
            $table->foreignId('paciente_id')
                  ->constrained('pacientes')
                  ->cascadeOnDelete();

            $table->foreignId('medico_id')
                  ->constrained('medicos')
                  ->cascadeOnDelete();

            $table->timestamps();

            // Índices
            $table->index('fecha');
            $table->index('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
