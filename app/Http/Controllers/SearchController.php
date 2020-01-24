<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
      $term = $request->input('term');
      $lieu = $request->input('lieu');
      if($lieu == "Choisissez la ville")
        $lieu = '';
      //$lieu = $request->input('lieu');
      echo $term;
      echo $lieu;

      // do things with them...
  }
}
