<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domaine;
use DB;

class DomaineController extends Controller
{
	
  public function store($domaine){

		 	//$domaine =new Domaine();
			//$domaine->nom = $request->input('domain');
			//$domain = Domaine::firstOrCreate(['nom' => $domaine]);
			///dd($domain->id);
		 	//return $domaine->id;
			$domain = Domaine::firstOrCreate(['nom' => $domaine]);  	
			 
    return $domain->id;
	}
}
