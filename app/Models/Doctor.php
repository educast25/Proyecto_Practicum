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
    
     // Relación con citas médicas
     public function citasMedicas()
     {
         return $this->hasMany(CitaMedica::class, 'doctor_id');
     }
 }
