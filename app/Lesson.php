<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $table = "lesson";
    public $timestamps = false;
    protected $primaryKey = 'stt';
}
