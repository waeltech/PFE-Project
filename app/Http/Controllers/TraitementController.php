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
        // $patients = Patients::paginate(10);

        // dd($traitements);

        return view('dashboardpages.Traitements', compact('traitements'));




        // $traitements = Traitement::with('patients')->get();

        // return $traitements;
    }

}
