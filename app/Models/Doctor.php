<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors'; // Nombre explícito de la tabla
    protected $fillable = [
        'nombres', 
        'especialidad', 
        'contacto', 
        'correo', 
        'sexo',
    ];    
}
