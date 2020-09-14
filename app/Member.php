<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['codeno','name','email','phoneno','photo','gender','address','description'];
}
