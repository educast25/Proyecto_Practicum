<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CitaMedica extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'hora',
        'paciente_id',
        'doctor_id',
        'enfermedad_id',
    ];
    public function enfermedad(){
        return $this->belongsTo(Enfermedad::class);
    }
}