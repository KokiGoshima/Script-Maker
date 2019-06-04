<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
     public function Situation(){
        return $this->belongsTo("App\Situation");
    }
}
