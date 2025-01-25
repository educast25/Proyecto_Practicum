<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Enfermedad;

class CitaMedicaController extends Controller
{
    public function index()
    {
        $citas = CitaMedica::with(['paciente', 'doctor'])->get();
        return view('citas_medicas.index', compact('citas'));
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $enfermedades = Enfermedad::all();
        
        return view('citas_medicas.create', compact('patients','doctors','enfermedades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'motivo' => 'required|string|max:255',
            'paciente_id' => 'required|integer|exists:patients,id',
            'doctor_id' => 'required|integer|exists:doctors,id',
            'enfermedad_id' => 'nullable|integer|exists:enfermedades,id',
        ]);

        CitaMedica::create($request->all());

        return redirect()->route('citas_medicas.index')->with('success', 'Cita médica creada satisfactoriamente');
    }

    public function show(CitaMedica $citas_medica)
    {
        return view('citas_medicas.show', ['citaMedica' => $citas_medica]);
    }

    public function edit(CitaMedica $citas_medica)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $enfermedades = Enfermedad::all();

        return view('citas_medicas.edit', [
            'citaMedica' => $citas_medica,
            'patients' => $patients,
            'doctors' => $doctors,
            'enfermedades' => $enfermedades
        ]);
    }

    public function update(Request $request, CitaMedica $citas_medica)
    {
        $request->validate([
            'fecha'         => 'required|date',
            'hora'          => 'required',
            'motivo'        => 'required|string|max:255',
            'paciente_id'   => 'required|integer',
            'doctor_id'     => 'required|integer',
            'enfermedad_id' => 'nullable|integer',
        ]);

        $citas_medica->update($request->all());

        return redirect()->route('citas_medicas.index')
                         ->with('success', 'Cita médica actualizada satisfactoriamente');
    }

    public function destroy(CitaMedica $citas_medica)
    {
        $citas_medica->delete();
        return redirect()->route('citas_medicas.index')
                         ->with('success', 'Cita médica eliminada satisfactoriamente');
    }
}
