<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Lista de usuarios
     */
    public function index()
    {
        $users = User::all(); // Obtén todos los usuarios
        return view('users.index', compact('users'));
    }

    /**
     * Formulario para crear usuario
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Almacena un nuevo usuario
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:paciente,doctor',
            'especialidad' => 'nullable|string|max:255', // Solo para doctores
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'especialidad' => $request->role === 'doctor' ? $request->especialidad : null,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }
}

