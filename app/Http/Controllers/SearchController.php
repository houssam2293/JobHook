<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Offre;
use App\Competence;
use App\Postulerspontane;
use App\Domaine;
use App\Recruteur;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    

      $term = $request->input('term');
      $lieu = $request->input('lieu');
      if($lieu == "Choisissez la ville")
        $lieu = '';
      $offres = Offre::where('intitule', 'like', '%'.$term.'%')->where('lieu', 'like', '%'.$lieu.'%')->get();
      $recruteurs = Recruteur::where('nom', 'like', '%'.$term.'%')->get();
      $domaines = Domaine::where('nom', 'like', '%'.$term.'%')->get();
      $competences = Competence::where('nom', 'like', '%'.$term.'%')->get();

      foreach ($competences as $c => $competence) {
        foreach ($competence->listcompetencesoffres as $l => $listcompetencesoffre) {
          if (!($offres->contains($listcompetencesoffre->offre))) {
            if($lieu == ''){
              $offres->push($listcompetencesoffre->offre);
            }
            else{
              if (strpos($listcompetencesoffre->offre->lieu, $lieu) !== false) {
                $offres->push($listcompetencesoffre->offre);
              }
            }
          }
        }
      }


      foreach ($recruteurs as $r => $recruteur) {
        foreach ($recruteur->offres as $o => $offre) {
          if (!($offres->contains($offre))) {
            if($lieu == ''){
              $offres->push($offre);
            }
            else{
              if (strpos($offre->lieu, $lieu) !== false) {
                $offres->push($offre);
              }
            }
          }
        }
      }
      foreach ($domaines as $d => $domaine) {
        foreach ($domaine->offres as $o => $offre) {
          if (!($offres->contains($offre))) {
            if($lieu == ''){
              $offres->push($offre);
            }
            else{
              if (strpos($offre->lieu, $lieu) !== false) {
                $offres->push($offre);
              }
            }
          }
        }
      }


      return view('search', ['offres' => $offres]);
  }
}
