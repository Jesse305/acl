<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermissao extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'user_id', 'permissao_id'
    ];
}
