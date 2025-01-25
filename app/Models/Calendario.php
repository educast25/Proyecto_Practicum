<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'hora',
        'motivo',
        'paciente_id',
        'doctor_id',
    ];

    // Relación con el modelo Paciente
    public function paciente()
    {
        return $this->belongsTo(Patient::class, 'paciente_id');
    }

    // Relación con el modelo Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
