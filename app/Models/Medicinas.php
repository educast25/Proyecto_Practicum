<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicinas extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Name patient',
        'Contact patient',
        'Name medicine',
        'Type medicine',
        'Expiration date',
    ];   
}