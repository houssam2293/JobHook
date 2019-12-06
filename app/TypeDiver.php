<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDiver extends Model
{
	protected $fillable = ['nom'];
    public $table = "typeDivers";
}
