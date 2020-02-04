<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Postuler;
class PostulerController extends Controller
{
    public function addPostuler($idcv,$idcand)
    {
    	$postuler = new Postuler();
    	$postuler->cv_id=$idcv;
    	$postuler->offre_id=$idcand;
    	$postuler->datePostuler= date("Y-m-d");
    	//dd($postuler);
    		$postuler->save();
    	
    	
    	
    	return Response()->json(['etat'=> true]);
    }
}
