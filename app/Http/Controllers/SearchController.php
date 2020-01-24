<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Offre;
use App\Domaine;

class SearchController extends Controller
{
  public function search(Request $request)
  {
      $term = $request->input('term');
      $lieu = $request->input('lieu');
      if($lieu == "Choisissez la ville")
        $lieu = '';
      $offres = Offre::where('intitule', 'like', '%'.$term.'%')->get();
      $domaines = Domaine::where('nom', 'like', '%'.$term.'%')->get();

      // echo $result1;
      // echo "\n\n";

      foreach ($domaines as $d => $domaine) {
        foreach ($domaine->offres as $o => $offre) {
          if (!($offres->contains($offre))) {
            $offres->push($offre);
          }
        }
        //$temp->push($dom->offres);
      }
      //echo $result2->offres;

      //$offres = $result1->union($result2);

      return view('search', ['offres' => $offres]);
  }
}
