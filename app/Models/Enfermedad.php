<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Enfermedad extends Model
{
    use HasFactory;
    protected $table = 'enfermedades'; // Especifica el nombre correcto de la tabla
    protected $fillable = [
        'nombre',
        'descripcion',
    ];    

    public function citasMedicas(){
        return $this->hasMany(CitaMedica::class);
    }
}