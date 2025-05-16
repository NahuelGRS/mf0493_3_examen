@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Departamento</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <form action="{{ route('departamentos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mt-2">Guardar</button>
        </form>
    </div>
@endsection
