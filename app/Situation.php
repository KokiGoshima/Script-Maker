<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    public function Construction(){
        return $this->belongsTo("App\Construction");
    }

    public function phrases(){
        return $this->hasmany("App\Phrase");
    }
}
