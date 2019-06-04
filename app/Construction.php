<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    public function situations(){
        return $this->hasmany("App\Situation");
    }
}
