@extends('layouts.master')

@section('title', 'Detalle de Cita Médica')

@section('content')
    <h2>Detalle de Cita Médica</h2>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cita #{{ $citaMedica->id }}</h5>
            <p class="card-text">
                <strong>Fecha:</strong> {{ $citaMedica->fecha }}<br>
                <strong>Hora:</strong> {{ $citaMedica->hora }}<br>
                <strong>Motivo:</strong> {{ $citaMedica->motivo }}<br>
            </p>
            {{-- Opcional: Mostrar relaciones con paciente, doctor, etc. --}}
            <p class="card-text">
                <strong>ID Paciente:</strong> {{ $citaMedica->paciente_id }}<br>
                <strong>ID Doctor:</strong> {{ $citaMedica->doctor_id }}<br>
                <strong>ID Enfermedad:</strong> {{ $citaMedica->enfermedad_id ?? 'No especificado' }}
            </p>
        </div>
    </div>

    <a href="{{ route('citas_medicas.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
@endsection
