<?php
// author: Aboura Sid-Ahmed

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Formation;
use App\Domaine;
use app\Http\Controllers\DomaineController;
class FormationController extends Controller
{
    public function store(Request $request,$cv){
           $cmpte =count($request->input('lieu'));
           $i =0;
            while ($i < $cmpte) {

    			$formation=new Formation();
    			$formation->diplome=$request->input('diplome')[$i];
                $formation->lieu=$request->input('lieu')[$i];
                $formation->dateDebut=$request->input('date_debut')[$i];
                $formation->dateFin=$request->input('date_fin')[$i];
                $formation->domaine_id =app('App\Http\Controllers\DomaineController')->store($request->input('domain')[$i]);
                $formation->cv_id=$cv;
    			$formation->save();
                    $i++;
                    
            }
        
		return ;
    }
    public function getFormations($id){
        $formations = Formation::where('cv_id',$id)->join('domaines', 'domaines.id', '=', 'formations.domaine_id')->get(); 
        dd($formations);
        return $formations;
    }
    public function addFormations(Request $request){

                $formation=new Formation();
                $formation->diplome=$request->diplome;
                $formation->lieu=$request->lieu;
                $formation->dateDebut=$request->dateDebut;
                $formation->dateFin=$request->dateFin;
                $formation->domaine_id =app('App\Http\Controllers\DomaineController')->store($request->nom);
                $formation->cv_id=$request->cvId;
                
                $formation->save();           
                 return Response()->json(['etat'=> true, 'id'=>$formation->id]);
    }
      public function updateFormations(Request $request){
                dd($request);
                $formation = Formation::find( $request->id);
                $formation->diplome=$request->diplome;
                $formation->lieu=$request->lieu;
                $formation->dateDebut=$request->dateDebut;
                $formation->dateFin=$request->dateFin;
                $formation->domaine_id =app('App\Http\Controllers\DomaineController')->store($request->nom);
                $formation->save();           
                 return Response()->json(['etat'=> true]);
   }
   public function deleteFormation($id){

        $formation = Formation::find($id);
        $formation->delete();
        return Response()->json(['etat'=> true]);
  }
}
