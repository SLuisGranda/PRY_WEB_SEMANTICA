<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Medico;
use App\Models\Cita;

class MedicalDataSeeder extends Seeder
{
    public function run(): void
    {
        /* =========================
           ESPECIALIDADES
        ==========================*/
        $especialidades = [
            [
                'nombre' => 'Cardiología',
                'descripcion' => 'Tratamiento del corazón',
                'codigo' => 'CAR-001',
                'area_medica' => 'Cardiovascular'
            ],
            [
                'nombre' => 'Neurología',
                'descripcion' => 'Sistema nervioso',
                'codigo' => 'NEU-001',
                'area_medica' => 'Neurología'
            ],
            [
                'nombre' => 'Pediatría',
                'descripcion' => 'Salud infantil',
                'codigo' => 'PED-001',
                'area_medica' => 'Medicina Infantil'
            ],
            [
                'nombre' => 'Dermatología',
                'descripcion' => 'Enfermedades de la piel',
                'codigo' => 'DER-001',
                'area_medica' => 'Piel'
            ]
        ];

        foreach ($especialidades as $especialidad) {
            Especialidad::create($especialidad);
        }

        /* =========================
           PACIENTES
        ==========================*/
        $pacientes = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan@gmail.com',
                'telefono' => '0991111111',
                'fecha_nacimiento' => '1990-05-10',
                'cedula' => '1723456789',
                'ciudad' => 'Quito',
                'direccion' => 'Av. Amazonas',
                'historia_medica' => 'Hipertensión'
            ],
            [
                'nombre' => 'María Torres',
                'email' => 'maria@gmail.com',
                'telefono' => '0982222222',
                'fecha_nacimiento' => '1988-08-20',
                'cedula' => '1721112233',
                'ciudad' => 'Guayaquil',
                'direccion' => 'Av. 9 de Octubre',
                'historia_medica' => 'Asma'
            ],
            [
                'nombre' => 'Carlos Mena',
                'email' => 'carlos@gmail.com',
                'telefono' => '0973333333',
                'fecha_nacimiento' => '1995-03-15',
                'cedula' => '1712345678',
                'ciudad' => 'Cuenca',
                'direccion' => 'Centro Histórico',
                'historia_medica' => 'Sin antecedentes'
            ]
        ];

        foreach ($pacientes as $paciente) {
            Paciente::create($paciente);
        }

        /* =========================
           MÉDICOS
        ==========================*/
        $medicos = [
            [
                'nombre' => 'Dr. Carlos Ruiz',
                'cedula' => '1710000001',
                'telefono' => '0994444444',
                'email' => 'cruiz@hospital.com',
                'especialidad_id' => 1
            ],
            [
                'nombre' => 'Dra. Ana Gómez',
                'cedula' => '1710000002',
                'telefono' => '0985555555',
                'email' => 'agomez@hospital.com',
                'especialidad_id' => 2
            ],
            [
                'nombre' => 'Dr. Luis Andrade',
                'cedula' => '1710000003',
                'telefono' => '0976666666',
                'email' => 'landrade@hospital.com',
                'especialidad_id' => 3
            ],
            [
                'nombre' => 'Dra. Paula Silva',
                'cedula' => '1710000004',
                'telefono' => '0967777777',
                'email' => 'psilva@hospital.com',
                'especialidad_id' => 4
            ]
        ];

        foreach ($medicos as $medico) {
            Medico::create($medico);
        }

        /* =========================
           CITAS
        ==========================*/
        $citas = [
            [
                'paciente_id' => 1,
                'medico_id' => 1,
                'fecha' => now()->addDays(1),
                'motivo' => 'Chequeo cardiológico'
            ],
            [
                'paciente_id' => 2,
                'medico_id' => 2,
                'fecha' => now()->addDays(2),
                'motivo' => 'Dolor de cabeza'
            ],
            [
                'paciente_id' => 3,
                'medico_id' => 3,
                'fecha' => now()->addDays(3),
                'motivo' => 'Control pediátrico'
            ],
            [
                'paciente_id' => 1,
                'medico_id' => 4,
                'fecha' => now()->addDays(4),
                'motivo' => 'Problemas de la piel'
            ]
        ];

        foreach ($citas as $cita) {
            Cita::create($cita);
        }

        $this->command->info('Datos médicos insertados correctamente');
    }
}
