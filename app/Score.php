<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function user(){
        return $this->belongsTo('App\User','tech_user_id');
    }
}
