<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
  //use SoftDeletes;

  //protected $dates = ['deleted_at'];

  protected $fillable = [
      'user_id', 'email', 'nom', 'prenom'
  ];

  public static function create(array $attributes = [])
  {
      $candidat = new Candidat();
      $candidat->user_id =$attributes['user_id'];
      $candidat->nom = $attributes['nom'];
      $candidat->prenom = $attributes['prenom'];
      $candidat->email = $attributes['email'];
      $candidat->save();
  }
  public function user() {
    return $this->belongsTo('App\User');
  }

}
