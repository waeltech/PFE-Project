<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    

    use HasFactory;
    protected $fillable = [
        'prenom',
        'nom',
        'sexe',
        'dateNaiss',
        'lieuNaiss',
        'age',
        'etatcivil',
        'addresse',
        'mutuelle',
        'profession',
        'email',
        'tel',
        'observations', 
    ];
}
