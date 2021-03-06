<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
  protected $fillable = ['nom'];

  public function formation(){
      return $this->hasOne('App\Formation');
    }
    
  public function offres() {
    return $this->hasMany('App\Offre');
  }
}
