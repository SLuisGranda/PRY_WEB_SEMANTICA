@extends('layouts.app')

@section('content')
<div style="max-width:800px;margin:auto">
    <h2>🩺 Especialidades Médicas</h2>

    <ul>
        @foreach ($especialidades as $especialidad)
            <li style="margin-bottom:10px">
                <strong>{{ $especialidad->nombre }}</strong><br>
                {{ $especialidad->descripcion }} <br>

                <a href="{{ url('/especialidades/'.$especialidad->id) }}">
                    Ver perfil semántico
                </a>
                <hr>
            </li>
        @endforeach
    </ul>
</div>
@endsection
