<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use App\Htpp\Controllers\BD;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
 
    public function index()
    {
        //$inscrits = Inscription::with('etudiants', 'formations', 'niveau', 'anneeAcademique')->get();
        $inscrits= DB::Select('select I.id,I.etudiant_id,I.formation_id,I.niveau_id,I.annee_aca_id,code_etu,nom,prenom,mail_ugb,intitule,niveau,annees 
                               from Inscriptions I,Etudiants E,formations f,niveau n,annee_acas a
                               where E.id=I.etudiant_id and f.id=i.formation_id and n.id=i.niveau_id and a.id=i.annee_aca_id');
        return $inscrits;
    }
    public function show($id)
    {
        $inscrits= DB::Select('select I.id,I.etudiant_id,I.formation_id,I.niveau_id,I.annee_aca_id,code_etu,nom,prenom,mail_ugb,intitule,niveau,annees 
        from Inscriptions I,Etudiants E,formations f,niveau n,annee_acas a
        where E.id=I.etudiant_id and f.id=i.formation_id and n.id=i.niveau_id and a.id=i.annee_aca_id and i.id= :id',
    ['id'=>$id]);
     return $inscrits;
    }
    public function store(Request $request)
    {
        $inscrits = Inscription::create($request->all());
        return "Etudiant a etait inscrits avec success";
    }
    public function update(Request $request,$id){
        $inscrits = Inscription::find($id);
        $inscrits ->update($request->all());
        return response()->json($inscrits,200);
    }
    public function destroy(Request $request, $id){
        $inscrits = Inscription::find($id);
        
        if ($inscrits) {
            $inscrits->delete(); // Appel de la méthode delete()
            return response()->json(null, 204); // Réponse avec code 204 pour indiquer la suppression
        } else {
            return response()->json("Not found", 404); // Gérer le cas où la formation n'est pas trouvée
        }
    }

}
