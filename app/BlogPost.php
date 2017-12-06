<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $table = "blogpost";
    public $timestamps = false;
    protected $primaryKey = 'idPost';

    public function liked(){
    	return $this->hasMany('App\takelike', 'idPost', 'idPost')->where('likeType', 2);
    }

    public function comment(){
    	return $this->hasMany('App\comment', 'idPost', 'idCourse')->where('type', 2);
    }
}
