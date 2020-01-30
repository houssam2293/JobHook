<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{	
	protected $primaryKey = "cvId";
    public function experiences(){
    	return $this->hasMany('App\Experience');
    }
}
