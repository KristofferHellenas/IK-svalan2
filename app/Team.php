<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
