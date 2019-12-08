<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
  //use SoftDeletes;

  //protected $dates = ['deleted_at'];


  public function user() {
    return $this->belongsTo('App\User');
  }

}
