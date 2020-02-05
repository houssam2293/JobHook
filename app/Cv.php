<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{

    public function experiences(){
    	return $this->hasMany('App\Experience');
    }
		public function formations(){
			return $this->hasMany('App\Formation');
		}
		public function candidat() {
		return $this->belongsTo('App\Candidat');
		}

		public function listcompetencescandidat(){
		return $this->hasMany('App\ListCompetenceCandidat');
		}
		public function postulers()
		{
			return $this->hasMany('App\Postuler');
		}
		public function candidat() {
	    return $this->belongsTo('App\Candidat');
	  }
		public function listcompetencescandidats()
		{
			return $this->hasMany('App\Listcompetencescandidat');
		}
    public function formations()
    {
      return $this->hasMany('App\Formation');
    }
      public function divers()
      {
        return $this->hasMany('App\Diver');
      }
}
