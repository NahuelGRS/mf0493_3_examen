@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Crear Departamento</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departamentos as $dep)
                    <tr>
                        <td>{{ $dep->nombre }}</td>
                        <td>{{ $dep->ubicacion }}</td>
                        <td>
                            <a href="{{ route('departamentos.show', $dep) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('departamentos.edit', $dep) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('departamentos.destroy', $dep) }}" method="POST" style="display:inline;">
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
