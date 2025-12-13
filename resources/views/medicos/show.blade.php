@extends('layouts.app')

@section('content')
    <h2>Perfil del Médico</h2>
    <p>Nombre: {{ $medico->name }}</p> 
    <p>Email: {{ $medico->email }}</p>
    <p>Especialidad: {{ $medico->speciality }}</p>
    <p>Teléfono: {{ $medico->phone }}</p>
    <p>Afiliación: {{ $medico->affiliation }}</p>
    <p>Nombre de la Afiliación: {{ $medico->name_affiliation }}</p>    

   
@endsection

@push('scripts')
     {{-- web semantica con json+ld --}}
    <script type="application/ld+json">
    {!! json_encode($jsonld) !!}
</script>
@endpush