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
        $request->validate([
            "name"=> "requered|string|max:255",
            "specialty"=> "requered|string|max:255",
            "contact"=> "requered|string|max:255",
        ]);

        Doctor::created($request->all());
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
            "name"=> "requered|string|max:255",
            "age"=> "requered|integer|min:0",
            "contact"=> "requered|string|max:255",
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
