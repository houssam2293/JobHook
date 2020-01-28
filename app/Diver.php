<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diver extends Model
{
    protected $primaryKey = "diverId";
    public function typeDivers(){
    	return $this->belongsTo('App\TypeDiver');
    }
}
