@extends('layouts.master')

@section('title', 'Crear Cita Médica')

@section('content')
    <h2>Crear Cita Médica</h2>

    <form action="{{ route('citas_medicas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="paciente_id">Paciente:</label>
            <select name="paciente_id" id="paciente_id" class="form-control">
                <option value="">Seleccione un paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->nombre }}</option>
                    {{-- Usa $patient->name o $patient->nombre, según tu tabla de 'patients' --}}
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="doctor_id">Doctor:</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">Seleccione un doctor</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nombres }}</option>                    
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo de la Cita:</label>
            <textarea name="motivo" id="motivo" class="form-control" rows="3" required></textarea>
        </div>        

        <div class="form-group">
            <label for="enfermedad_id">Enfermedad:</label>
            <select name="enfermedad_id" id="enfermedad_id" class="form-control">
                <option value="">Seleccione una enfermedad</option>
                @foreach($enfermedades as $enfermedad)
                    <option value="{{ $enfermedad->id }}">{{ $enfermedad->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Cita</button>
    </form>
@endsection
