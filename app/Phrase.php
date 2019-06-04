<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
     public function Phrase(){
        return $this->belongsTo("App\Situation");
    }
}
