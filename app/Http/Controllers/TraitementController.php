<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    
    public function Traitindex()
    {
        $traitements = Traitement::with('patients')->paginate(10);
        $patients = Patients::paginate(10);

        return view('dashboardpages.Traitements', compact('traitements','patients'));

    }

}
