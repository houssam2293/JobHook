<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domaine;
use DB;

class DomaineController extends Controller
{
	
  public function store($domaine){

		 	
			$domain = Domaine::firstOrCreate(['nom' => $domaine]); // insert if not exist! 	
			$domain = Domaine::firstOrCreate(['nom' => $domaine]); // insert if not exist! 	

    return $domain->id;
	}
}
