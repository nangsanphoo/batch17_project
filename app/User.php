<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

<<<<<<< HEAD
        'name', 'email', 'password','address','DOB','photo'
=======
        'name', 'email', 'password',/*'address', 'birthday', 'photo',*/
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function customer($value='')
    {
        return $this->hasOne('App\Customer');
    }
}
