<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Postuler;
use App\Postulerspontane;
class PostulerController extends Controller
{
  public function addSpontane($idRec,$idCand)
  {

     $postuler = new Postulerspontane();
     $postuler->cv_id=$idCand;
     $postuler->recruteur_id=$idRec;

     $postuler->save();
     return Response()->json(['etat'=> true]);
  }

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
