<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'DOB',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $touches = ['post'];

    public function posts(){
        return $this->hasMany('App\Post','created_by');
    }

    public function getFullNamefromUser(){
        return "{$this->fname} {$this->lname}";
    }
    //Relation with roles table

    public function roles(){
        return $this->hasOne('App\Role','id','role');
    }

    public function post(){
        return $this->belongsToMany('App\Post')->withPivot('id','status');
    }

    //Relation with Score Numbers
    public function score(){
        return $this->hasOne('App\Score','tech_user_id','tech_id');
    }
}
