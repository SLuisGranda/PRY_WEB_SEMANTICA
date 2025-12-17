# 🏥 Sistema de Citas Médicas – Web Semántica con Laravel

## 📌 Descripción del Proyecto
Este proyecto implementa un sistema de gestión de citas médicas desarrollado en **Laravel**, aplicando conceptos de **Web Semántica** mediante el uso de **JSON-LD** y el vocabulario de **Schema.org**.

El objetivo es estructurar los datos de la aplicación para que puedan ser comprendidos tanto por humanos como por máquinas, cumpliendo con los requerimientos académicos del proyecto.

---

## 🛠️ Tecnologías Utilizadas
- PHP 8.2
- Laravel 12
- MySQL
- JSON-LD
- Schema.org
- XAMPP
- Postman

---

## 📂 Modelos Implementados
El sistema cuenta con los siguientes modelos:

- Paciente
- Médico
- Especialidad
- Cita Médica

Cada modelo incluye:
- Modelo Eloquent
- Controlador Web
- Controlador API con JSON-LD
- Rutas Web y API
- Ejemplo de respuesta real en formato JSON-LD

---

## 🌐 Rutas Web (Visualización HTML)

| Recurso | URL |
|------|-----|
| Médicos | http://127.0.0.1:8000/medicos |
| Pacientes | http://127.0.0.1:8000/pacientes |
| Especialidades | http://127.0.0.1:8000/especialidades |
| Citas | http://127.0.0.1:8000/citas |

Estas rutas muestran información en formato HTML e incluyen metadatos semánticos embebidos usando JSON-LD.

---

## 🔌 Rutas API (JSON-LD)

| Recurso | URL |
|------|-----|
| Médico | http://127.0.0.1:8000/api/medicos/{id} |
| Paciente | http://127.0.0.1:8000/api/pacientes/{id} |
| Especialidad | http://127.0.0.1:8000/api/especialidades/{id} |
| Cita Médica | http://127.0.0.1:8000/api/citas/{id} |

Estas rutas devuelven respuestas en formato **JSON-LD**, compatibles con estándares de Web Semántica.

---

## 🧠 Implementación de Web Semántica (JSON-LD)

Se utilizó el vocabulario oficial de **Schema.org** para describir las entidades del sistema:

- Person (Paciente)
- Physician (Médico)
- MedicalSpecialty (Especialidad)
- MedicalAppointment (Cita Médica)

## 📌 Ejemplos de Respuestas JSON-LD

### 🧍‍♂️ Médico

```json
{
  "@context": "https://schema.org",
  "@type": "Physician",
  "@id": "http://127.0.0.1:8000/api/medicos/1",
  "name": "Dr. Carlos Ruiz",
  "email": "cruiz@hospital.com",
  "telephone": "0994444444",
  "medicalSpecialty": "Cardiología"
}



```
▶️ Ejecución del Proyecto

Clonar el repositorio
---
git clone https://github.com/tu-repositorio.git

Instalar dependencias
---
composer install

Configurar el archivo .env
---
cp .env.example .env
---
php artisan key:generate

Ejecutar migraciones y seeders
---
php artisan migrate --seed

Iniciar el servidor
---
php artisan serve




