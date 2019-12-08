<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];


  public function user() {
    return $this->belongsTo('App\User');
  }

}
