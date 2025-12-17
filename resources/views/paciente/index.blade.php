@extends('layouts.app')

@section('content')
<div style="max-width:800px; margin:auto">
    <h2>Listado de Pacientes</h2>

    <ul>
        @foreach($pacientes as $paciente)
            <li style="margin-bottom:15px">
                <strong>Nombre:</strong> {{ $paciente->nombre }} <br>
                <strong>Email:</strong> {{ $paciente->email }} <br>

                <a href="{{ url('/pacientes/'.$paciente->id) }}">
                    Ver Perfil Semántico
                </a>
                <hr>
            </li>
        @endforeach
    </ul>
</div>
@endsection
