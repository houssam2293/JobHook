<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulerspontane extends Model
{
  public function offre() {
    return $this->belongsTo('App\Offre');
  }
  public function candidat() {
    return $this->belongsTo('App\Candidat');
  }
}
