<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
class InscriptionController extends Controller
{
 
    public function index()
    {
        $inscrits = Inscription::with('etudiants', 'formations', 'niveau', 'anneeAcademique')->get();
        return response()->json($inscrits, 200);
    }
    public function show($id)
    {
        $inscrits = Inscription::find($id);
        return response()->json($inscrits, 200);
    }
    public function store(Request $request)
    {
        $inscrits = Inscription::create($request->all());
        return "Etudiant a etait inscrits avec success";
    }
    public function update(Request $request,$id){
        $inscrits = Inscription::find($id);
        $inscritst ->update($request->all());
        return response()->json($inscrits,200);
    }
    public function destroy(Request $request, $id){
        $inscrits = Inscription::find($id);
        
        if ($etudiant) {
            $etudiant->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("l etudiant n'a pas été trouvée", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }

}
