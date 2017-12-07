<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permission";
	protected $primaryKey = 'idperson';
	public $timestamps = false;
	protected $fillable = [
        'idperson', 'type'
    ];
}
