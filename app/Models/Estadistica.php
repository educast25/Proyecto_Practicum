<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Name patient',
        'Contact patient',
        'Name doctors',
        'Diagnosis',
        'specialty',
        'Medical appointment date',
        'Reason for the medical appointment',        
    ];   
}