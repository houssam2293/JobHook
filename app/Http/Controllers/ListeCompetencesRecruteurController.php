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
          $lcc->competenceId =app('App\Http\Controllers\CompetenceController')->store($cometnces[$x]);
          $lcc->offreId=$offreId;
    $lcc->save();
      }


  return ;
}
}
