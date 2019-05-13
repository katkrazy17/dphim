<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    //
}
public function film()
{
	return $this->hasMany('App\Model\Film');
}
public function user()
{
	return $this->hasMany('App\Model\User');
}
