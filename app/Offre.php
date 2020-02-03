<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
  protected $fillable = ['status'];
  public function recruteur() {
    return $this->belongsTo('App\Recruteur');
  }

  public function listcompetencesoffres(){
    return $this->hasMany('App\Listcompetencesoffre');
  }

  public function domaine()
    {
        return $this->belongsTo('App\Domaine');
    }
    public function postulers()
    {
      return $this->hasMany('App\Postuler');
    }
}
