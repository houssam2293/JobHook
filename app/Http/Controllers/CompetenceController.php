<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Competence;
class CompetenceController extends Controller
{
    public function store($competenc){

			$competence = Competence::firstOrCreate(['nom' => $competenc]); // insert if not exist! 
			$competence = Competence::firstOrCreate(['nom' => $competenc]); // insert if not exist! 

    return $competence->competenceId;
	}
}
