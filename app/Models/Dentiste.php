<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Dentiste extends Model implements Authenticatable
{
    use AuthenticatableTrait;

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
