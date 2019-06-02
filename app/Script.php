<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
     protected $fillable = ['content', 'user_id'];

     public function User(){
        return $this->belongsTo("App\User");
    }
}
