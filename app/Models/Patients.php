<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    

    use HasFactory;
    protected $fillable = [
        'NumDoss',
        'PrenomPat',
        'NomPat',
        'Sexe',
        'DateNaiss',
        'LieuNaiss',
        'Age',
        'Etat_civil',
        'Addresse',
        'Mutuelle',
        'Profession',
        'Email',
        'Tel',
        'Observations', 
    ];

    protected $primaryKey = 'NumDoss';

}
