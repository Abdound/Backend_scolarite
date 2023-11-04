<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\annee_aca;
class AnneeacaController extends Controller
{
    public function index()
    {
        $annee_aca = annee_aca::all();
        return response()->json($annee_aca, 200);
    }

    public function show($id){
        $annee_aca=annee_aca::find($id);
        return response()->json($annee_aca,200);
    }

    public function store(Request $request)
{
    $nouvelleAnnee = $request->input('annees'); 

    // Vérification si l'année académique existe déjà dans la base de données
    $existeDeja = annee_aca::where('annees', $nouvelleAnnee)->exists(); 

    if ($existeDeja) {
        return "Cette année académique existe déjà dans la base de données.";
    } else {
        $annee_aca = annee_aca::create($request->all());
        return "Année académique créée avec succès";
    }
}

    public function update(Request $request,$id){
        $annee_aca = annee_aca::find($id);
        $annee_aca ->update($request->all());
        return response()->json($annee_aca,200);
    }
    public function destroy(Request $request, $id){
        $annee_aca = annee_aca::find($id);
        
        if ($annee_aca) {
            $annee_aca->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("l annee_academique n'a pas été trouvée", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }
}
