<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
  protected $fillable = ['nom'];
  
  public function listcompetencesoffres(){
    return $this->hasMany('App\Listcompetencesoffre');
  }
  public function Listcompetencecandidat(){
    return $this->hasMany('App\ListCompetenceCandidat');
  }
}
