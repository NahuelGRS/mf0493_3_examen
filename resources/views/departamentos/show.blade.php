@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Departamento</h1>

        <p><strong>Nombre:</strong> {{ $departamento->nombre }}</p>
        <p><strong>Ubicación:</strong> {{ $departamento->ubicacion }}</p>

        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
