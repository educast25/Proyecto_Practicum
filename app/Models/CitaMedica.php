<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitaMedica extends Model
{
    use HasFactory;

    protected $table = 'citas_medicas';
    
    protected $fillable = [
        'fecha',
        'hora',
        'motivo',
        'paciente_id',
        'doctor_id',
        'enfermedad_id',
    ];
    
    // Relación con pacientes
    public function paciente()
    {
        return $this->belongsTo(Patient::class, 'paciente_id');
    }
    // Relación con doctores
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    // Relación con enfermedades
    public function enfermedad()
    {
        return $this->belongsTo(Enfermedad::class, 'enfermedad_id');
    }
}
