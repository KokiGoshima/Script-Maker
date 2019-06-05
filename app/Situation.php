<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    public function construction(){
        return $this->belongsTo("App\Construction");
    }

    public function phrases(){
        return $this->hasmany("App\Phrase");
    }
}
