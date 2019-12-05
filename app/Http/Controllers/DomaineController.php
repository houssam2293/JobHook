<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Domaine;
use DB;

class DomaineController extends Controller
{
    public function store($request){

			$domaine =new Domaine();
			$domaine->nom = $request->input('domain');
			//$domain = Domaine::firstOrNew(array('nom' => Input::get('domain')));
			//udd($domain);
			return $domaine->id;
		
		return ;
}
}
