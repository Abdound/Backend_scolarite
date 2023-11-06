<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;
use App\Htpp\Controllers\BD;
use Illuminate\Support\Facades\DB;

class Etudiants_formation extends Controller
{
    // public function index()
    // {
    //     $formations = formation::withCount('inscriptions')->get();
    //     return response()->json($formations);
    // }

    public function index()
    {
        $etu_formation = DB::select('SELECT f.intitule, COUNT(i.formation_id) AS total_inscriptions 
                                      FROM inscriptions i 
                                      INNER JOIN formations f ON f.id = i.formation_id 
                                      GROUP BY f.intitule');
        return response()->json($etu_formation);
    }
    
}
