<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dentiste extends Authenticatable
{
    use HasFactory;

    protected $table = "dentiste";
    protected $fillable = [
        'NomDent',
        'PrenomDent',
        'TelDent',
        'EmailDent',
        'password',
        'Ville',
        'Adresse',
    ];
}
