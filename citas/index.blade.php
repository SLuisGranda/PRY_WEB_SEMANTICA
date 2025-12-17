@extends('layouts.app')

@section('content')
<div style="max-width:800px;margin:auto;background:#fff;padding:20px;border-radius:8px">

    <h2>📅 Listado de Citas</h2>

    @forelse ($citas as $cita)
        <div style="border:1px solid #ddd;padding:10px;margin-bottom:10px;border-radius:6px">
            <p><strong>ID:</strong> {{ $cita->id }}</p>
            <p><strong>Paciente:</strong> {{ $cita->paciente->nombre ?? 'No registrado' }}</p>
            <p><strong>Médico:</strong> {{ $cita->medico->name ?? 'No registrado' }}</p>
            <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>

            <a href="{{ url('/citas/'.$cita->id) }}">Ver detalle</a>
        </div>
    @empty
        <p>No hay citas registradas.</p>
    @endforelse

</div>
@endsection
