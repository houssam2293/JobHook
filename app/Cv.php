<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{	
    public function experiences(){
    	return $this->hasMany('App\Experience');
    }
    public function user() {
    return $this->belongsTo('App\Candidat');
  }
}
