<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

use App\Models\ShipperInfos;
use App\Models\TruckerInfos;
use App\Models\FreightInfos;
use App\Models\AgencyInfos;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = ['username', 'email', 'password', 'role_id'];
  public function authenticate($password)
  {
    $password;
    $this->password;
    return Hash::check($password, $this->password);
    //return;
  }
  public function hasRole($role_id)
  {
    return $this->role_id === $role_id;
  }
  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
  ];

  
  public function shippers()
  {
    return $this->hasMany(ShipperInfos::class, 'user_id');
  }

  public function truckers()
  {
    return $this->hasMany(TruckerInfos::class, 'user_id');
  }

  public function freights()
  {
    return $this->hasMany(FreightInfos::class, 'user_id');
  }

  public function agencies()
  {
    return $this->hasMany(AgencyInfos::class, 'user_id');
  }
}
