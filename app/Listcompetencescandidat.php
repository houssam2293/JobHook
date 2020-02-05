<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listcompetencescandidat extends Model
{
  public function competence(){
      return $this->belongsTo('App\Competence');
  }
  public function cv(){
      return $this->belongsTo('App\Cv');
  }
}
