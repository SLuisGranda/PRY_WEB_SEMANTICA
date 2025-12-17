@extends('layouts.app')

@section('content')
<div style="max-width:600px;margin:auto;background:#fff;padding:20px;border-radius:8px">

    <h2>📌 Detalle de la Cita</h2>

    <p><strong>ID:</strong> {{ $cita->id }}</p>
    <p><strong>Paciente:</strong> {{ $cita->paciente->nombre ?? 'No registrado' }}</p>
    <p><strong>Médico:</strong> {{ $cita->medico->name ?? 'No registrado' }}</p>
    <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
    <p><strong>Estado:</strong> {{ $cita->estado ?? 'No registrado' }}</p>
    <p><strong>Observaciones:</strong> {{ $cita->observaciones ?? 'No registradas' }}</p>

    <a href="{{ url('/citas') }}">← Volver</a>
</div>

{{-- JSON-LD --}}
@php
    $jsonLd = [
        "@context" => "https://schema.org",
        "@type" => "MedicalAppointment",
        "startDate" => $cita->fecha . 'T' . $cita->hora,
        "patient" => [
            "@type" => "Person",
            "name" => $cita->paciente->nombre ?? ''
        ],
        "physician" => [
            "@type" => "Physician",
            "name" => $cita->medico->name ?? ''
        ]
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@endsection
