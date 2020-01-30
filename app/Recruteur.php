<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
  public function offres() {
      return $this->hasMany('App\Offre');
  }
}
