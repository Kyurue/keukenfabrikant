<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primarykey = 'id';
    public $timestamps = true;


    public function user() 
    {
        return $this->belongsToMany('App\User');
    }

    public function favorite_to_user() 
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
