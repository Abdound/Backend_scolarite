<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json($etudiants, 200);
    }

    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return response()->json($etudiant, 200);
    }

    public function store(Request $request)
    {
        $etudiant = Etudiant::create($request->all());
        return "Etudiant creer avec succe";
    }
    public function update(Request $request,$id){
        $etudiant = Etudiant::find($id);
        $etudiant ->update($request->all());
        return response()->json($etudiant,200);
    }
    public function destroy(Request $request, $id){
        $etudiant = Etudiant::find($id);
        
        if ($etudiant) {
            $etudiant->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("l etudiant n'a pas été trouvée", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }
    
    
}
