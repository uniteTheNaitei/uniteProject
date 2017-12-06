<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = "course";
    public $timestamps = false;
    protected $primaryKey = 'idCourse';
	
	public function lesson() {
		return $this->hasMany('App\Lesson','idCourse', 'idCourse');
	}
	
	public function person() {
		return $this->hasManyThrough('App\Person', 'App\JoinCourse', 'idCourse', 'idPerson', 'idCourse', 'idUser');
	}
	public function takelike(){
		return $this->hasMany('App\takelike', 'idPost', 'idCourse')->where('likeType', 1);
	}
	
	public function comment(){
		return $this->hasMany('App\comment', 'idPost', 'idCourse')->where('type', 1);
	}
	
	public function trainer(){
		return $this->belongsTo('App\Person', 'idCoach', 'idPerson');
	}


}
