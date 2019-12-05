<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Formation;

class FormationController extends Controller
{
    public function store(Request $request){

			$formation=new Formation();
			$formation->diplome=$request->input('diplome');
            $formation->lieu=$request->input('lieu');
            $formation->dateDebut=$request->input('date_debut');
            $formation->dateFin=$request->input('date_fin');
           // TODO $formation->cvId=$cv;
			$formation->save();
			//TODO domain id

		return ;
    }
}
