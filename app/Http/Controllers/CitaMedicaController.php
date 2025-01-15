<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use App\Models\Enfermedad;
use Illuminate\Http\Request;
class CitaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = CitaMedica::with("enfermedad")->get();
        return view("citas_medicas.index", compact("appointments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enfermedades = Enfermedad::all();
        return view("citas_medicas.create", compact("enfermedades"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "fecha"=> "required|date",
            "hora"=> "required",
            "paciente_id"=> "required|integer",
            "doctor_id"=> "required|integer",
            "enfermedad_id"=> "nullable|integer",
        ]);

        CitaMedica::create($request->all());
        return redirect()->route("citas_medicas.index")->with("success","Citas Médicas se creó Satisfactoriamente");
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
    public function edit(CitaMedica $citaMedica)
    {
        $enfermedades = Enfermedad::all();
        return view("citas_medicas.edit", compact("citaMedica","enfermedades"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CitaMedica $citaMedica)
    {
        $request->validate([
            "fecha"=> "required|date",
            "hora"=> "required",
            "paciente_id"=> "required|integer",
            "doctor_id"=> "required|integer",
            "enfermedad_id"=> "nullable|integer",
        ]);

        $citaMedica->update( $request->all() );
        return redirect()->route("citas_medicas.index")->with("success","Citas Médicas actualizado Satisfactoriamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CitaMedica $citaMedica)
    {
        $citaMedica->delete();
        return redirect()->route("citas_medicas.index")->with("success","Citas Médicas eliminado Satisfactoriamente");
    }
}