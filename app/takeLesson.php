<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class takeLesson extends Model
{
	protected $table="takelesson";
	public $timestamps=false;
	protected $primaryKey ='stt';
	//protected $primaryKey = ['idjoinCourse', 'stt'];
    //

    
}
