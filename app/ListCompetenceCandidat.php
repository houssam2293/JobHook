<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCompetenceCandidat extends Model
{
    public $table = "listCompetencesCandidats";
    protected $fillable = ['competence_id','cv'];
}
