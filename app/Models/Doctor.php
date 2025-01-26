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
        'user_id', // Asegúrate de que 'user_id' esté en los campos llenables
    ];   
    
    /**
     * Relación con el modelo User: Cada Doctor pertenece a un Usuario (user_id).
     */
    public function user()
    {
        return $this->belongsTo(User::class); // Relación con el modelo User
    }

    // Relación con citas médicas
    public function citasMedicas()
    {
        return $this->hasMany(CitaMedica::class, 'doctor_id');
    }
}
