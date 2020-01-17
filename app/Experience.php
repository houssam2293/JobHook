<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function cvs(){
    	return $this->belongsTo('App\Cv');
    }
}
