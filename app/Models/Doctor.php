<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctores'; // Nombre explícito de la tabla
    protected $fillable = [
        'nombre',
        'especialidad',
        'contacto',
    ];    
}
