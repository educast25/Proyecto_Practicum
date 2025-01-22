<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view("doctors.index", compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("doctors.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            "nombres"=> "required|string|max:255",
            "especialidad"=> "required|string|max:255",
            "contacto"=> "required|string|max:255",
            "correo"=> "required|email|max:255|unique:doctors",
            "sexo" => "required|in:Masculino,Femenino,Otro",
        ]);
        
        // Guardar datos en la base de datos
        Doctor::create($request->all());
        // Redirigir después de guardar
        return redirect()->route("doctors.index")->with("success","Doctor creado Satisfactoriamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        return view("doctors.show", compact("doctor"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {
        return view("doctors.edit", compact("doctor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {
        $request->validate([
            "nombres" => "required|string|max:255",
            "especialidad" => "required|string|max:255",
            "contacto" => "required|string|max:255",
            "correo" => "required|email|max:255|unique:doctors,correo," . $doctor->id,
            "sexo" => "required|in:Masculino,Femenino,Otro",
        ]);

        $doctor->update($request->all());
        return redirect()->route("doctors.index")->with("success","Doctor actualizado Satisfactoriamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route("doctors.index")->with("success","Doctor eliminado Satisfactoriamente");
    }
}
