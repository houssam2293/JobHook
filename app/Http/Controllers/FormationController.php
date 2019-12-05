<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Formation;
use App\Domaine;
use app\Http\Controllers\DomaineController;
class FormationController extends Controller
{
    public function store(Request $request,$cv){

			$formation=new Formation();
			$formation->diplome=$request->input('diplome');
            $formation->lieu=$request->input('lieu');
            $formation->dateDebut=$request->input('date_debut');
            $formation->dateFin=$request->input('date_fin');
            $formation->domaineId =app('App\Http\Controllers\DomaineController')->store($request->input('domain'));

            $formation->cvId=$cv;
			$formation->save();
			//TODO domain id

		return ;
    }
}
