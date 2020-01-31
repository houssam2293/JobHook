<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
  public function offres() {
      return $this->hasMany('App\Offre');
  }
  // use SoftDeletes;
  //
  // protected $dates = ['deleted_at'];
  protected $fillable = [
      'user_id', 'email', 'nom'
  ];

  public static function create(array $attributes = [])
  {
      $recruteur = new Recruteur();
      $recruteur->user_id =$attributes['user_id'];
      $recruteur->nom = $attributes['nom'];
      $recruteur->email = $attributes['email'];
      $recruteur->save();
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

}
