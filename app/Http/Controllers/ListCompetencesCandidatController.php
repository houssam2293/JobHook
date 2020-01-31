<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Http\Controllers\CompetenceController;
use App\ListCompetenceCandidat;
use app\Http\Controllers\ListCompetencesCandidatController;

class ListCompetencesCandidatController extends Controller
{
    public function store($competence,$cv){
    		$lcc=new ListCompetenceCandidat();
            $lcc->competence_id =app('App\Http\Controllers\CompetenceController')->store($competence);
            $lcc->cv_id=$cv;
            $lcc->save(); 
    		

		return;
}
    
}