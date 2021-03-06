<?php
// author: Aboura Sid-Ahmed

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Diver;
use app\Http\Controllers\TypeDiverController;

class DiverController extends Controller
{
    public function store(Request $request,$cv){
           $cmpte =count($request->input('lieu'));
           $i =0;
            while ($i < $cmpte) {

			$diver =new Diver();
			$diver->intitule=$request->input('intitileDiver')[$i];
            $diver->lieu=$request->input('diver_lieu')[$i];
            $diver->dateDebut=$request->input('diver_date_debut')[$i];
            $diver->dateFin=$request->input('diver_date_fin')[$i];
            $diver->cv_id=$cv;
            $diver->typeDiver_id =app('App\Http\Controllers\TypeDiverController')->store($request->input('typeDiver')[$i]);
			$diver->save();
             $i++;
            }

		return ;
    }
    public function getDivers($id){
        $divers = Diver::where('cv_id',$id)->join('typedivers', 'typedivers.id', '=', 'divers.typeDiver_id')
            ->select('divers.id','divers.intitule','divers.lieu','typedivers.nom','divers.dateDebut','divers.datefin')
            ->get();
           // dd($divers);
        return $divers;
    }
    public function addDivers(Request $request){

                $diver=new Diver();
                $diver->intitule=$request->intitule;
                $diver->lieu=$request->lieu;
                $diver->dateDebut=$request->dateDebut;
                $diver->datefin=$request->datefin;
                $diver->typeDiver_id =app('App\Http\Controllers\TypeDiverController')->store($request->nom);
                $diver->cv_id=$request->cvId;;
                $diver->save();
                 return Response()->json(['etat'=> true, 'id'=>$diver->id]);
    }
      public function updateDiver(Request $request){

                $diver = Diver::find($request->id);
                $diver->intitule=$request->intitule;
                $diver->lieu=$request->lieu;
                $diver->dateDebut=$request->dateDebut;
                $diver->datefin=$request->datefin;
                $diver->typeDiver_id=app('App\Http\Controllers\TypeDiverController')->store($request->nom);

                $diver->save();
                 return Response()->json(['etat'=> true]);
   }
   public function deleteDiver($id){

        $diver = Diver::find($id);
        $diver->delete();
        return Response()->json(['etat'=> true]);
  }
}
