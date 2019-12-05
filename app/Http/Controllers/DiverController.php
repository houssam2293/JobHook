<?php
// author: Aboura Sid-Ahmed

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Diver;
use app\Http\Controllers\TypeDiverControllerController;

class DiverController extends Controller
{
    public function store(Request $request,$cv){

			$diver =new Diver();
			$diver->intitule=$request->input('intitileDiver');			
            $diver->lieu=$request->input('diver_lieu');
            $diver->dateDebut=$request->input('diver_date_debut');
            $diver->dateFin=$request->input('diver_date_fin');
            $diver->cvId=$cv;
           // dd($request->input('typeDiver'));
            $diver->typeDiverId =app('App\Http\Controllers\TypeDiverController')->store($request->input('typeDiver'));
			$diver->save();

		return ;
    }
}
