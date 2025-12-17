@extends('layouts.app')

@section('content')
<div style="max-width:600px;margin:auto;background:#fff;padding:20px;border-radius:8px">

    <h2>Especialidad Médica</h2>

    <p><strong>Nombre:</strong> {{ $especialidad->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $especialidad->descripcion }}</p>
    <p><strong>Área médica:</strong> {{ $especialidad->area_medica }}</p>

    <a href="{{ url('/especialidades') }}">← Volver</a>
</div>

@php
    $jsonld = [
        '@context' => 'https://schema.org',
        '@type' => 'MedicalSpecialty',
        'name' => $especialidad->nombre,
        'description' => $especialidad->descripcion,
        'areaServed' => $especialidad->area_medica,
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($jsonld, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endsection
