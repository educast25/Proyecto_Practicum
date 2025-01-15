<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'pacientes'; // Nombre explícito de la tabla
    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'direccion',
        'telefono',
    ];    
}