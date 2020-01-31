<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{	
    public function experiences(){
    	return $this->hasMany('App\Experience');
    }
}
