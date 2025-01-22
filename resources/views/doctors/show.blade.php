@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Detalles del Doctor</h2>
    <p><strong>Nombre:</strong> {{ $doctor->nombres }}</p>
    <p><strong>Especialidad:</strong> {{ $doctor->especialidad }}</p>
    <p><strong>Contacto:</strong> {{ $doctor->contacto }}</p>
    <p><strong>Correo:</strong> {{ $doctor->correo }}</p>
    <p><strong>Sexo:</strong> {{ $doctor->sexo }}</p>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection