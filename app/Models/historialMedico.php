<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historialMedico extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Name patient',
        'Contact patient',
        'Name doctors',
        'Diagnosis',
        'specialty',
        'Medical appointment date',
        'Medical record consultation',               
    ];   
}