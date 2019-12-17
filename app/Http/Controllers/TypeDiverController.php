<?php
// author: Aboura Sid-Ahmed

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TypeDiver;
class TypeDiverController extends Controller
{
    public function store($typeDiver){

			$typedivers = TypeDiver::firstOrCreate(['nom' => $typeDiver]); // insert if not exist! 	
			$typedivers = TypeDiver::firstOrCreate(['nom' => $typeDiver]); // insert if not exist! 	

    return $typedivers->typeDiverId;
	}
}
