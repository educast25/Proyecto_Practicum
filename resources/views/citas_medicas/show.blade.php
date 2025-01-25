@extends('layouts.master')

@section('title', 'Detalle de la Cita Médica')

@section('content')
<div class="container">
    <h2>Detalle de la Cita Médica #{{ $citaMedica->id }}</h2>
    
    <p><strong>Fecha:</strong> {{ $citaMedica->fecha }}</p>
    <p><strong>Hora:</strong> {{ $citaMedica->hora }}</p>
    <p><strong>Motivo:</strong> {{ $citaMedica->motivo }}</p>
    <p><strong>Paciente:</strong> {{ $citaMedica->paciente_id }}</p>
    <p><strong>Doctor:</strong> {{ $citaMedica->doctor_id }}</p>
    <p><strong>Enfermedad:</strong> {{ $citaMedica->enfermedad_id }}</p>

    <a href="{{ route('citas_medicas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
