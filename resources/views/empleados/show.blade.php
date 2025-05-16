@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Empleado</h1>

        <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
        <p><strong>Email:</strong> {{ $empleado->email }}</p>
        <p><strong>DNI:</strong> {{ $empleado->dni }}</p>
        <p><strong>Departamento:</strong> {{ $empleado->departamento->nombre }}</p>

        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
