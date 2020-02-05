<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postuler extends Model
{
  public function offre() {
    return $this->belongsTo('App\Offre');
  }
  public function cv() {
    return $this->belongsTo('App\Cv');
  }
}
