<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Http\Controllers\CompetenceController;
use App\ListCompetenceCandidat;
use app\Http\Controllers\ListCompetencesCandidatController;

class ListCompetencesCandidatController extends Controller
{
    public function store($competence,$cv){
    		$lcc=new ListCompetenceCandidat();
            $lcc->competence_id =app('App\Http\Controllers\CompetenceController')->store($competence);
            $lcc->cv_id=$cv;
            $lcc->save(); 
    		

		return;
}
 public function updateCompetences(String $string,$id){
        $lccc = ListCompetenceCandidat::where('cv_id',$id)->delete();
        /*foreach ($lccc as $key ) {
         $key = $key->delete();
        }*/
        $competnces = explode(",",$string);
              foreach ($competnces as $co) {

              	$idComp= app('App\Http\Controllers\CompetenceController')->store($co);
              	 $lcc=new ListCompetenceCandidat();
                  $lcc->competence_id =$idComp;
                 $lcc->cv_id=$id;
                  $lcc->save();
                }

 $competences = ListCompetenceCandidat::where('cv_id',$id)->join('competences', 'listCompetencesCandidats.competence_id', '=', 'competences.id')->get();

        return Response()->json(['etat'=> true,'competences' =>$competences]);
    }
    
}