<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Offre;

class SearchController extends Controller
{
  public function search(Request $request)
  {
      $term = $request->input('term');
      $lieu = $request->input('lieu');
      if($lieu == "Choisissez la ville")
        $lieu = '';
      $offres = Offre::where('intitule', 'like', '%informatique%')->get();


      return view('cv.index', ['offres' => $offres]);
  }
}
