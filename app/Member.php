<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['gender','phoneno','age','hobbies','user_id'
	];
	public function user($value='')
	{
		return $this->belongsTo('App\User','user_id');
	}
	public function match($value='')
	{
		return $this->hasOne('App\Match','match_id');
	}
}
