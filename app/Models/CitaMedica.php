<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Name patient',
        'Contact patient',
        'Specialty',
        'Medical appointment date',
        'Medical appointment time',
        'Reason for the medical appointment',
    ];   
}