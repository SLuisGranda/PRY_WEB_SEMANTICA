@extends('layouts.app')

@section('content')
<div style="max-width:600px; margin:auto; background:#fff; padding:20px; border-radius:10px">

    <h2>Perfil del Paciente</h2>

    <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
    <p><strong>Email:</strong> {{ $paciente->email }}</p>
    <p><strong>Teléfono:</strong> {{ $paciente->telefono ?? 'No registrado' }}</p>
    <p><strong>Fecha de nacimiento:</strong> {{ $paciente->fecha_nacimiento ?? 'No registrada' }}</p>
    <p><strong>Ciudad:</strong> {{ $paciente->ciudad ?? 'No registrada' }}</p>
    <p><strong>Dirección:</strong> {{ $paciente->direccion ?? 'No registrada' }}</p>

    <a href="{{ url('/pacientes') }}">← Volver al listado</a>
</div>

{{-- JSON-LD --}}
<script type="application/ld+json">
{!! json_encode($jsonld, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection
