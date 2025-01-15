<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Mostrar un listado de medicamentos.
     */
    public function index()
    {
        $medicamentos = Medicamento::with(['paciente', 'doctor'])->get();
        return view('medicamentos.index', compact('medicamentos'));
    }

    /**
     * Mostrar el formulario para crear un nuevo medicamento.
     */
    public function create()
    {
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('medicamentos.create', compact('pacientes', 'doctores'));
    }

    /**
     * Almacenar un nuevo medicamento en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'fecha_caducidad' => 'required|date',
            'paciente_id' => 'nullable|exists:pacientes,id',
            'doctor_id' => 'nullable|exists:doctors,id',
        ]);

        Medicamento::create($request->all());

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado exitosamente.');
    }

    /**
     * Mostrar la información de un medicamento específico.
     */
    public function show(Medicamento $medicamento)
    {
        return view('medicamentos.show', compact('medicamento'));
    }

    /**
     * Mostrar el formulario para editar un medicamento existente.
     */
    public function edit(Medicamento $medicamento)
    {
        $pacientes = Patient::all();
        $doctores = Doctor::all();
        return view('medicamentos.edit', compact('medicamento', 'pacientes', 'doctores'));
    }

    /**
     * Actualizar un medicamento en la base de datos.
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'fecha_caducidad' => 'required|date',
            'paciente_id' => 'nullable|exists:pacientes,id',
            'doctor_id' => 'nullable|exists:doctors,id',
        ]);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado exitosamente.');
    }

    /**
     * Eliminar un medicamento de la base de datos.
     */
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado exitosamente.');
    }
}