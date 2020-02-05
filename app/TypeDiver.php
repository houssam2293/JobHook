<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typediver extends Model
{
	protected $fillable = ['nom'];
    public function divers(){
    	return $this->hasMany('App\Diver');
    }
}
