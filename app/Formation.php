<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
	 protected $primaryKey = "formationId";

    public function domaine(){
    	return $this->belongsTo('App\Domaine','foreign_key');
    }
}
