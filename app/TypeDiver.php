<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDiver extends Model
{
	protected $primaryKey = "typeDiverId";
	protected $fillable = ['nom'];
    public $table = "typeDivers";
    public function divers(){
    	return $this->hasMany('App\Diver');
    }
}
