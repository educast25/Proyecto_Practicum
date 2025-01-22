@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Detalles del Paciente</h2>
    <p><strong>Nombre:</strong> {{ $patient->nombre }}</p>
    <p><strong>Ciudad:</strong> {{ $patient->ciudad }}</p>
    <p><strong>Direccion:</strong> {{ $patient->direccion }}</p>
    <p><strong>Fecha Nacimiento:</strong> {{ $patient->fecha_nacimiento }}</p>
    <p><strong>Edad:</strong> {{ $patient->edad }}</p>
    <p><strong>Contacto:</strong> {{ $patient->contacto }}</p>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection