<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htpp\Controllers\BD;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;

class Etudiant_HF extends Controller
{
    public function getNombreEtudiants()
    {
        $nombreHommes = Etudiant::where('sexe', 'M')->count();
        $nombreFemmes = Etudiant::where('sexe', 'F')->count();

        return response()->json([
            'nombre_hommes' => $nombreHommes,
            'nombre_femmes' => $nombreFemmes,
        ]);
    }
}
