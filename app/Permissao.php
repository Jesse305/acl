<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
	
    public $timestamps = false;

    protected $fillable = [
    	'tipo'
    ];
}
