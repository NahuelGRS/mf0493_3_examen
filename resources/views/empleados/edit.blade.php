@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Empleado</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <form action="{{ route('empleados.update', $empleado) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $empleado->email }}" required>
            </div>
            <div class="form-group">
                <label>DNI</label>
                <input type="text" name="dni" class="form-control" value="{{ $empleado->dni }}" required>
            </div>
            <div class="form-group">
                <label>Departamento</label>
                <select name="departamento_id" class="form-control" required>
                    @foreach ($departamentos as $dep)
                        <option value="{{ $dep->id }}" {{ $empleado->departamento_id == $dep->id ? 'selected' : '' }}>
                            {{ $dep->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
        </form>
    </div>
@endsection
