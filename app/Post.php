<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // This is not necesary but would help to force to use the appropied table
    protected $table = 'posts';

    //This function would create the relationship with the User table.
    public function user(){
        return $this->belongsTo('App\User','created_by');
    }

    public function users(){
        return $this->belongsToMany('App\User')->withPivot('id','status');

    }
}
