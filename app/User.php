<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $guarded = [];

  public function publications()
  {
    return $this->hasMany(Publication::class);
  }

//agrego function travelplans
  public function travelplans()
  {
    return $this->hasMany(Travelplan::class);
  }

  public function friends(){
    return $this->belongsToMany(User::class,'friends','idAmigo1', 'idAmigo2');
  }

  // public function friends(){
  //   return $this->hasMany(User::class,'friends','idAmigo1', 'idAmigo2');
  // }

  // public function theFriends()
  // {
  //   return $this->belongsToMany(User::class, 'friends', 'idAmigo2', 'idAmigo1');
  // }
}
