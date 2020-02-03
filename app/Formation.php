<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{

    public function domaine(){
    	return $this->belongsTo('App\Domaine','foreign_key');
    }
}
