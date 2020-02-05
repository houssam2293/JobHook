<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listcompetencesoffre extends Model
{
    public function competence(){
        return $this->belongsTo('App\Competence');
    }
    public function offre(){
        return $this->belongsTo('App\Offre');
    }
}
