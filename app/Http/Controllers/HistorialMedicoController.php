<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HistorialMedicoController extends Controller
{
    public function index()
    {
        $historiales = HistorialMedico::with(['paciente', 'doctor'])->get();
        return view('historiales_medicos.index', compact('historiales'));
    }

    public function create()
    {
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('historiales_medicos.create', compact('pacientes', 'doctores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'fecha' => 'required|date',
            'diagnostico' => 'required|string',
            'tratamiento' => 'nullable|string',
            'medicamentos' => 'nullable|string',
        ]);

        HistorialMedico::create($request->all());

        return redirect()->route('historiales_medicos.index')->with('success', 'Historial médico creado con éxito.');
    }

    public function show(HistorialMedico $historialMedico)
    {
        return view('historiales_medicos.show', compact('historialMedico'));
    }

    public function edit(HistorialMedico $historialMedico)
    {
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('historiales_medicos.edit', compact('historialMedico', 'pacientes', 'doctores'));
    }

    public function update(Request $request, HistorialMedico $historialMedico)
    {
        $request->validate([
            'paciente_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'fecha' => 'required|date',
            'diagnostico' => 'required|string',
            'tratamiento' => 'nullable|string',
            'medicamentos' => 'nullable|string',
        ]);

        $historialMedico->update($request->all());

        return redirect()->route('historiales_medicos.index')->with('success', 'Historial médico actualizado con éxito.');
    }

    public function destroy(HistorialMedico $historialMedico)
    {
        $historialMedico->delete();
        return redirect()->route('historiales_medicos.index')->with('success', 'Historial médico eliminado con éxito.');
    }
}
