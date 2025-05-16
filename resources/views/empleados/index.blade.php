@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Crear Empleado</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $emp)
                    <tr>
                        <td>{{ $emp->nombre }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->dni }}</td>
                        <td>{{ $emp->departamento->nombre }}</td>
                        <td>
                            <a href="{{ route('empleados.show', $emp) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('empleados.edit', $emp) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('empleados.destroy', $emp) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
