<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
     public function situation(){
        return $this->belongsTo("App\Situation");
    }
}
