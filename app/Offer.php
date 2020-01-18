<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $guarded=[];

    public function localizedDiffForHumans() {
    Carbon::setLocale(App::getLocale());
    return $this->created_at->diffForHumans();
}
}
