<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = ['username','name', 'email', 'password','phone'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function city()
    {
      return $this->belongsTo('App\City');
    }


    public function elanlar()
    {
      return $this->hasMany('App\Elan','user_id');  //yeniii
    }

    public function qarsiliqlar()
    {
      return $this->hasMany('App\Qarsiliq');
    }
}
