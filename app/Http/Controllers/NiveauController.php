<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\niveau;

class NiveauController extends Controller
{
    public function index()
    {
        $niveau = niveau::all();
        return response()->json($niveau, 200);
    }

    public function show($id)
    {
        $niveau = niveau::find($id);
        return response()->json($niveau, 200);
    }

    public function store(Request $request)
    {
        $niveau = niveau::create($request->all());
        return "Le niveau creer avec succe";
    }
    public function update(Request $request,$id){
        $niveau = niveau::find($id);
        $niveau ->update($request->all());
        return response()->json($niveau,200);
    }
    public function destroy(Request $request, $id){
        $niveau = niveau::find($id);
        
        if ($niveau) {
            $niveau->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("La niveau n'a pas été trouvée", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }
    
}
