<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use App\Models\Paciente;
use Illuminate\Database\Seeder;

class MedicalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear especialidades
        $especialidades = [
            [
                'nombre' => 'Cardiología',
                'descripcion' => 'Especialidad médica dedicada al diagnóstico y tratamiento de enfermedades del corazón y sistema circulatorio',
                'codigo' => 'CAR-001',
                'area_medica' => 'Cardiovascular'
            ],
            [
                'nombre' => 'Neurología',
                'descripcion' => 'Especialidad que estudia y trata enfermedades del sistema nervioso',
                'codigo' => 'NEU-001',
                'area_medica' => 'Sistema Nervioso'
            ],
            [
                'nombre' => 'Pediatría',
                'descripcion' => 'Especialidad médica que se encarga del cuidado de la salud de los niños',
                'codigo' => 'PED-001',
                'area_medica' => 'Medicina Infantil'
            ],
            [
                'nombre' => 'Dermatología',
                'descripcion' => 'Especialidad que se dedica al estudio y tratamiento de enfermedades de la piel',
                'codigo' => 'DER-001',
                'area_medica' => 'Piel'
            ],
            [
                'nombre' => 'Oftalmología',
                'descripcion' => 'Especialidad que trata las enfermedades del ojo y la visión',
                'codigo' => 'OFT-001',
                'area_medica' => 'Ojos'
            ]
        ];

        foreach ($especialidades as $especialidad) {
            Especialidad::create($especialidad);
        }

        // Crear pacientes
        $pacientes = [
            [
                'nombre' => 'Juan Pérez García',
                'email' => 'juan.perez@example.com',
                'telefono' => '+593987654321',
                'fecha_nacimiento' => '1990-05-15',
                'cedula' => '1234567890',
                'ciudad' => 'Quito',
                'direccion' => 'Calle Principal 123, Apto 4B',
                'historia_medica' => 'Paciente con antecedentes de hipertensión, bajo control. Alérgico a Penicilina.'
            ],
            [
                'nombre' => 'María García López',
                'email' => 'maria.garcia@example.com',
                'telefono' => '+593987654322',
                'fecha_nacimiento' => '1985-03-20',
                'cedula' => '0987654321',
                'ciudad' => 'Cuenca',
                'direccion' => 'Avenida Central 456',
                'historia_medica' => 'Paciente con migrañas recurrentes. Diabetes tipo 2 controlada.'
            ],
            [
                'nombre' => 'Carlos Rodríguez Martínez',
                'email' => 'carlos.rodriguez@example.com',
                'telefono' => '+593987654323',
                'fecha_nacimiento' => '1992-07-10',
                'cedula' => '1122334455',
                'ciudad' => 'Ambato',
                'direccion' => 'Calle de la Paz 789',
                'historia_medica' => 'Sin antecedentes médicos relevantes. Última revisión hace 2 años.'
            ],
            [
                'nombre' => 'Ana Martínez Silva',
                'email' => 'ana.martinez@example.com',
                'telefono' => '+593987654324',
                'fecha_nacimiento' => '1988-11-30',
                'cedula' => '5566778899',
                'ciudad' => 'Guayaquil',
                'direccion' => 'Barrio Las Flores 321',
                'historia_medica' => 'Paciente con asma controlado. Antecedentes de rinitis alérgica.'
            ],
            [
                'nombre' => 'Roberto López Fernández',
                'email' => 'roberto.lopez@example.com',
                'telefono' => '+593987654325',
                'fecha_nacimiento' => '1980-02-14',
                'cedula' => '9988776655',
                'ciudad' => 'Manta',
                'direccion' => 'Paseo Marítimo 654',
                'historia_medica' => 'Paciente con colesterol elevado. Requiere monitoreo periódico.'
            ]
        ];

        foreach ($pacientes as $paciente) {
            Paciente::create($paciente);
        }

        $this->command->info('Datos médicos insertados exitosamente');
    }
}