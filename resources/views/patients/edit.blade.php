@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editar Pacientes</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $patient->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <textarea name="ciudad" id="ciudad" class="form-control">{{ $patient->ciudad }}</textarea>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <textarea name="direccion" id="direccion" class="form-control">{{ $patient->direccion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
            <textarea name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">{{ $patient->fecha_nacimiento }}</textarea>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <textarea name="edad" id="edad" class="form-control">{{ $patient->edad }}</textarea>
        </div>
        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <textarea name="contacto" id="contacto" class="form-control">{{ $patient->contacto }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection