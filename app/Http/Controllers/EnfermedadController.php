<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enfermedades = Enfermedad::all();
        return view("enfermedades.index", compact("enfermedades"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("enfermedades.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre"=> "requered|string",
            "descripcion"=> "nullable|string",
        ]);

        Enfermedad::created($request->all());
        return redirect()->route("enfermedades.index")->with("success","Enfermedades creadas Satisfactoriamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enfermedad $enfermedad)
    {
        return view("enfermedades.edit", compact("enfermedades"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enfermedad $enfermedad)
    {
        $request->validate([
            "nombre"=> "requered|string",
            "descripcion"=> "nullable|string",
        ]);

        $enfermedad->update($request->all());
        return redirect()->route("enfermedades.index")->with("success","Enfermedad actualizada Satisfactoriamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enfermedad $enfermedad)
    {
        $enfermedad->delete();
        return redirect()->route("enfermedades.index")->with("success","Enfermedad eliminada Satisfactoriamente");
    }
}