<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListeCompetencesRecruteurController extends Controller
{
  public function store($competence,$offreId){

      $cometnces = explode(",",$competence);
      $arrlength = count($cometnces);
      for($x = 0; $x < $arrlength; $x++) {
      $lcc=new \App\ListCompetencesOffre();
          $lcc->competence_id =app('App\Http\Controllers\CompetenceController')->store($cometnces[$x]);
          $lcc->offre_id=$offreId;
    $lcc->save();
      }


  return;
}

  public function update($competence,$offreId)
  {

    $this->destroy($offreId);
    $this->store($competence,$offreId);
    return;
  }

  public function destroy($id)
  {
    $listCompetence = \App\ListCompetencesOffre::where('offre_id', $id)->delete();
    return;
  }
}
