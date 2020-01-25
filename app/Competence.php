<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
  public function listcompetencesoffres(){
    return $this->hasMany('App\Listcompetencesoffre');
  }
}
