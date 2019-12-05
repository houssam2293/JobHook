<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Http\Controllers\CompetenceController;
use App\ListCompetenceCandidat;

class ListCompetencesCandidatController extends Controller
{
    public function store(Request $request,$cv){
    		
    		$cometnces = explode(",",$request->input('competences'));
    		$arrlength = count($cometnces);
    		
    		for($x = 0; $x < $arrlength-1; $x++) {
				$lcc=new ListCompetenceCandidat();
            $lcc->competenceId =app('App\Http\Controllers\CompetenceController')->store($cometnces[$x]);
            $lcc->cvId=$cv;
			$lcc->save();
    		}
			

		return ;
}
}