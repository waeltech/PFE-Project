<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Traitement extends Model
{
    use HasFactory;

    protected $primaryKey = 'Num_Traitement';

    protected $fillable = [ 'NumDoss','DateTraitement', 'Acte', 'Dent'];

    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patients::class, 'patient_traitements', 'Num_Traitement', 'NumDoss');
    }


  
}
