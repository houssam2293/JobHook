<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diver extends Model
{
    public function typeDivers(){
    	return $this->belongsTo('App\TypeDiver');
    }
}
