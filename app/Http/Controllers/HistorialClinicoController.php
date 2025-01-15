<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HistorialClinicoController extends Controller
{
    // Mostrar todas las citas médicas
    public function index()
    {
        $appointments = HistorialClinico::all();  // O puedes usar ->paginate(10) para paginación
        return view('historial_clinico.index', compact('appointments'));
    }

    // Mostrar el formulario para crear una nueva cita médica
    public function create()
    {
        // Pasamos las listas de pacientes y doctores para que se pueda seleccionar en el formulario
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('historial_clinico.index', compact('patients', 'doctores'));
    }

    // Almacenar una nueva cita médica
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo_cita' => 'required|string|max:255',
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        // Crear la cita médica
        HistorialClinico::create($request->all());

        return redirect()->route('historial_clínico.index')->with('success', 'Cita médica creada con éxito');
    }

    // Mostrar los detalles de una cita médica específica
    public function show($id)
    {
        $appointment = HistorialClinico::findOrFail($id);
        return view('historial_clinico.show', compact('historial_clinico'));
    }

    // Mostrar el formulario para editar una cita médica
    public function edit($id)
    {
        $appointment = HistorialClinico::findOrFail($id);
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('historial_clinico.edit', compact('historial_clinico', 'pacientes', 'doctores'));
    }

    // Actualizar los detalles de una cita médica
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo_cita' => 'required|string|max:255',
            'paciente_id' => 'required|exists:pacientes,id',
            'doctor_id' => 'required|exists:doctors,id',
        ]);

        $appointment = HistorialClinico::findOrFail($id);
        $appointment->update($request->all());

        return redirect()->route('historial_clinico.index')->with('success', 'Cita médica actualizada con éxito');
    }

    // Eliminar una cita médica
    public function destroy($id)
    {
        $appointment = HistorialClinico::findOrFail($id);
        $appointment->delete();

        return redirect()->route('historial_clinico.index')->with('success', 'Cita médica eliminada con éxito');
    }

    // Mostrar el historial médico de una cita
    public function history($id)
    {
        $appointment = HistorialClinico::findOrFail($id);
        // Aquí puedes mostrar la información detallada del historial médico, si la tienes
        return view('historial_clinico.history', compact('historial_clinico'));
    }
}
