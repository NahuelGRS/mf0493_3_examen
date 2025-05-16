@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Empleado</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>DNI</label>
                <input type="text" name="dni" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Departamento</label>
                <select name="departamento_id" class="form-control" required>
                    <option value="">Seleccione un departamento</option>
                    @foreach ($departamentos as $dep)
                        <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-2">Guardar</button>
        </form>
    </div>
@endsection
