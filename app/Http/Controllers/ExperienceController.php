<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;
class ExperienceController extends Controller
{
    public function store(Request $request,$cv){
           $cmpte=count($request->input('lieu'));
           $i=0;
           dd($cmpt);
            while ($i < $cmpte) {
                $experience =new Experience();
                $experience->intitule=$request->input('intitule')[$i];
                $experience->lieu=$request->input('exp_lieu')[$i];
                $experience->dateDebut=$request->input('exp_date_debut')[$i];
                $experience->dateFin=$request->input('exp_date_fin')[$i];
                $experience->cvId=$cv;
                $experience->description=$request->input('description')[$i];
                dd($experience);    
                $experience->save();   
                $i++;        
                 }
			
		return ;
    }
}
