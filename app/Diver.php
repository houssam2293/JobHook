<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diver extends Model
{
    public function typediver(){
    	return $this->belongsTo('App\Typediver');
    }
    public function cv(){
    	return $this->belongsTo('App\Cv');
    }
}
