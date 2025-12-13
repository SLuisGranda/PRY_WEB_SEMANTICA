@extends('layouts.app')

@section('content')
<ul>
@foreach ($medicos as $medico)

<li>
    <p>Nombre: {{ $medico->name }}</p>
    <p>Email: {{ $medico->email }}</p>
    <a href="{{ route('medicos.show', $medico->id) }}">Ver Perfil Semantico</a>   
    <hr>
</li>
@endforeach
</ul>
@endsection