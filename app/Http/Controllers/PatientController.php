<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view("patients.index", compact("patients"));
    }
    public function create(){
        return view("patients.create");
    }
    public function store(Request $request){    
        $request->validate([
            "name"=> "required|string|max:255",
            "age"=> "required|integer|min:0",
            "contact"=> "required|string|max:255",
        ]);
    }
    public function show(Patient $patient){
        return view("patients.index", compact("patient"));
    }
    
    public function edit(Patient $patient){

    }
    public function delte(){

    }

}


?>