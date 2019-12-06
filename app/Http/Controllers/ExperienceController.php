<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;
class ExperienceController extends Controller
{
    public function store(Request $request,$cv){

			$experience =new Experience();
			$experience->intitule=$request->input('intitule');
            $experience->lieu=$request->input('exp_lieu');
            $experience->dateDebut=$request->input('exp_date_debut');
            $experience->dateFin=$request->input('exp_date_fin');
            $experience->cvId=$cv;
            $experience->description=$request->input('description');
			$experience->save();

		return ;
    }
}
