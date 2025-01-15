<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    use HasFactory;
    protected $table = 'calendarios';
    // Los campos que son asignables en masa (fillable)
    protected $fillable = [
        'fecha',
        'hora',
        'motivo_cita',
        'paciente_id',
        'doctor',
    ];
    public $timestamps = true;
    // Relaciones (si es necesario)
    // Relación con el modelo Paciente
    public function paciente()
    {
        return $this->belongsTo(Patient::class, 'paciente_id');
    }
    // Ejemplo: Relación con el modelo Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    // Función que devuelve un formato amigable para la fecha y hora
    public function getFormattedDate()
    {
        return \Carbon\Carbon::parse($this->fecha)->format('d/m/Y');
    }

    public function getFormattedTime()
    {
        return \Carbon\Carbon::parse($this->hora)->format('H:i');
    }
}
