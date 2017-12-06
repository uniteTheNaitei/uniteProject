<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable
{
    //
	use Notifiable;
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $table = "person";
	protected $primaryKey = 'idPerson';
	protected $fillable = [
        'name', 'email', 'password','height', 'age', 'weight', 'address'
    ];
	public $timestamps = false;
	    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	
	public function permission(){
		return $this->hasOne('App\Permission', 'idperson', 'idPerson') -> type;
	} 
	
	public function joinCourse(){
		return $this->hasManyThrough('App\Course', 'App\JoinCourse', 'idUser', 'idCourse', 'idPerson', 'idCourse');
	}

	public function idjoinCourse(){
		return $this -> hasMany('App\JoinCourse', 'idUser', 'idPerson');
	}
	
	public function createdCourse(){
		return $this->hasMany('App\Course', 'idCoach', 'idPerson');
	}
	
	public function likedCourse(){
		return $this->hasManyThrough('App\Course', 'App\takeLike', 'idperson', 'idCourse', 'idPerson', 'idPost')->where('likeType', 1);
	}
	

}
