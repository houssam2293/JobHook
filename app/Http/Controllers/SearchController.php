<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Offre;
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
      $offres = Offre::where('intitule', 'like', '%'.$term.'%')->where('lieu', 'like', $lieu)->get();
      $recruteurs = Recruteur::where('nom', 'like', '%'.$term.'%')->get();
      $domaines = Domaine::where('nom', 'like', '%'.$term.'%')->get();

      // echo $result1;
      // echo "\n\n";
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
      //echo $result2->offres;

      //$offres = $result1->union($result2);

      return view('search', ['offres' => $offres]);
  }
}
