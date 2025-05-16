@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Departamento</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $departamento->nombre }}" required>
            </div>
            <div class="form-group">
                <label>Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" value="{{ $departamento->ubicacion }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
        </form>
    </div>
@endsection
