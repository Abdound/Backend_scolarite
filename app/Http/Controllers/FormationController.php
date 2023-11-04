<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;

class FormationController extends Controller
{
    public function index()
    {
        $formation = formation::all();
        return response()->json($formation, 200);
    }

    public function show($id)
    {
        $formation = formation::find($id);
        return response()->json($formation, 200);
    }

    public function store(Request $request)
    {
        $formation = formation::create($request->all());
        return "formation creer avec succe";
    }
    public function update(Request $request,$id){
        $formation = formation::find($id);
        $formation ->update($request->all());
        return response()->json($formation,200);
    }
    public function destroy(Request $request, $id){
        $formation = Formation::find($id);
        
        if ($formation) {
            $formation->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("La formation n'a pas été trouvée", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }
    
}
