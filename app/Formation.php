<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
	
    public function domaine(){
    	return $this->belongsTo('App\Domaine');
    }
		public function cv(){
    	return $this->belongsTo('App\Cv');
    }

}
