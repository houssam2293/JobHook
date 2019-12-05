<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Formation;
use app\Domaine;
use app\Http\Controllers\DomaineController;
class FormationController extends Controller
{
    public function store(Request $request,$cv){

			$formation=new Formation();
			$formation->diplome=$request->input('diplome');
            $formation->lieu=$request->input('lieu');
            $formation->dateDebut=$request->input('date_debut');
            $formation->dateFin=$request->input('date_fin');
            $formation->domain =app('App\Http\Controllers\DomaineController')->store($request);

            $formation->cvId=$cv;
			$formation->save();
			//TODO domain id

		return ;
    }
}
