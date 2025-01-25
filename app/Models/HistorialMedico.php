<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;

    protected $table = 'historiales_medicos';

    protected $fillable = [
        'paciente_id',
        'doctor_id',
        'fecha',
        'diagnostico',
        'tratamiento',
        'medicamentos',
    ];

    public function paciente()
    {
        return $this->belongsTo(Patient::class, 'paciente_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}


