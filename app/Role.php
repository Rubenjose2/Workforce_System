<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //creating a relashion with user
    public function users(){
        return $this->belongsTo('App\User','id');
    }
}
