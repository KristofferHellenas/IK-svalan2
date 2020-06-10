<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotboll extends Model
{
    public function medlemmar(){
        return $this->belongsToMany('App\Medlemmar');
    }
}
