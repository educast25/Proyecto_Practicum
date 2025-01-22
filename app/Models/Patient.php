<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients'; // Nombre explícito de la tabla
    protected $fillable = [
        'nombre',
        'ciudad',
        'direccion',
        'fecha_nacimiento',
        'edad',
        'contacto',
    ];    
}