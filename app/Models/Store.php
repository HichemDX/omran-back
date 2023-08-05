<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Store extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $casts = [
    'address' => 'object'
  ];

  protected $fillable = [
    'name',
    'provider',
    'provider_id',
    'fcm_token',
    'key',
    'image',
    'phone',
    'email',
    'commune_id',
    'address',
    'longitude',
    'latitude',
    'image',
    'min_amount_order',
    'password',
    'validated',
    'code',
  ];


  public function getImageAttribute($value)
  {
    return $value ? strpos($value, ':') != false || strpos($value, 'www') != false || strpos($value, 'http') != false ? $value : url('storage/images/stores/' . $value) : asset('icons/store.png');
  }

  public function communes()
  {
    return $this->belongsToMany(Commune::class, 'commune_store')->withPivot('price', 'price_wilaya')->with('wilaya');
  }

  public function orders()
  {
    return $this->hasMany(Order::class);
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }

  public function reports()
  {
    return $this->hasMany(Report::class);
  }

  public function commune()
  {
    return $this->belongsTo(Commune::class)->with('wilaya');
  }

  public function notifications()
  {
    return $this->hasMany(StoreNotification::class);
  }

  public function devices()
  {
    return $this->hasMany(Storedevice::class);
  }
  public function ratings()
  {
    return $this->hasMany(StoreRating::class);
  }
}
