<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $table = "comment";
	protected $primaryKey = "idComment";
    //
	
	public function like(){
		return $this->hasMany('App\takelike', 'idPost', 'idComment')->where('likeType', 3);
	}
	
	public function person() {
		return $this ->hasOne('App\Person', 'idPerson', 'idUser');
	}
	
}
