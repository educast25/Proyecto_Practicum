<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'marca',
        'fecha_caducidad',
        'paciente_id',
        'doctor_id',
    ];

    /**
     * Relación con el modelo Paciente.
     * Un medicamento puede ser recetado a un paciente.
     */
    public function paciente()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Relación con el modelo Doctor.
     * Un medicamento puede ser recetado por un doctor.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}