<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable=['user_id','member_id','status'
	];
	public function user($value='')
	{
		return $this->belongsTo('App\User','user_id');
	}
	public function member($value='')
	{
		return $this->belongsTo('App\Member','member_id');
	}
}
