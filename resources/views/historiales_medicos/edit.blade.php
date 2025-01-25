@extends('layouts.master')

@section('title', 'Editar Historial Médico')

@section('content')
<div class="container">
    <h2>Editar Historial Médico</h2>

    {{-- Formulario para editar un historial médico --}}
    <form action="{{ route('historiales_medicos.update', $historialMedico->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        {{-- Campo Paciente --}}
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}" {{ $paciente->id == $historialMedico->paciente_id ? 'selected' : '' }}>
                        {{ $paciente->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    
        {{-- Campo Doctor --}}
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">Seleccione un doctor</option>
                @foreach($doctores as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id == $historialMedico->doctor_id ? 'selected' : '' }}>
                        {{ $doctor->nombres }}
                    </option>
                @endforeach
            </select>
        </div>
    
        {{-- Campo Fecha --}}
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', $historialMedico->fecha) }}" required>
        </div>
    
        {{-- Campo Diagnóstico --}}
        <div class="form-group">
            <label for="diagnostico">Diagnóstico</label>
            <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" required>{{ old('diagnostico', $historialMedico->diagnostico) }}</textarea>
        </div>
    
        {{-- Campo Tratamiento --}}
        <div class="form-group">
            <label for="tratamiento">Tratamiento</label>
            <textarea name="tratamiento" id="tratamiento" class="form-control" rows="4">{{ old('tratamiento', $historialMedico->tratamiento) }}</textarea>
        </div>
    
        {{-- Campo Medicamentos --}}
        <div class="form-group">
            <label for="medicamentos">Medicamentos</label>
            <textarea name="medicamentos" id="medicamentos" class="form-control" rows="4">{{ old('medicamentos', $historialMedico->medicamentos) }}</textarea>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Actualizar Historial</button>
    </form>
    
</div>
@endsection
