<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCompetenceCandidat extends Model
{
    public $table = "listCompetencesCandidats";
    protected $fillable = ['competence_id','cv_id'];

    public function competence(){
        return $this->hasOne('App\Competence');
    }
    public function cv(){
        return $this->belongsTo('App\Cv');
    }
}
