<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Administrateur extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';
    protected $fillable = [
        'nom', 'prenom' , 'email', 'password',
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}
