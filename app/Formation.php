<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
	public function cvs(){
    	return $this->belongsTo('App\Cv');
    }

    public function domaine(){
    	return $this->belongsTo('App\Domaine','foreign_key');
    }
}
