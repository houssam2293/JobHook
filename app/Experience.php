<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	    protected $primaryKey = "experienceId";

    public function cvs(){
    	return $this->belongsTo('App\Cv');
    }
}
