<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class Etudiant_non_inscrits extends Controller
{
    public function index(){
        $etudiantsNonInscrits = Etudiant::whereDoesntHave('inscriptions')->get();
        return response()->json($etudiantsNonInscrits);
    }
}
