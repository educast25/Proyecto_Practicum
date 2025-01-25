<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos.index', compact('medicamentos'));
    }

    public function create()
    {
        return view('medicamentos.create');
    }

    public function store(Request $request)
    {
        // Validación de datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'laboratorio' => 'nullable|string|max:255',
        'cantidad_disponible' => 'required|integer|min:0',
        'precio' => 'required|numeric|min:0',
    ]);

    // Guardar el medicamento en la base de datos
    Medicamento::create($request->all());

    // Redirigir a la lista de medicamentos con un mensaje de éxito
    return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado con éxito.');
    }

    public function show(Medicamento $medicamento)
    {
        return view('medicamentos.show', compact('medicamento'));
    }

    public function edit(Medicamento $medicamento)
    {
        return view('medicamentos.edit', compact('medicamento'));
    }

    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'laboratorio' => 'nullable|string|max:255',
            'cantidad_disponible' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
        ]);

        $medicamento->update($request->all());
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado con éxito.');
    }

    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado con éxito.');
    }
}
