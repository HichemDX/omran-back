<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard= 'customer';

    protected $fillable = [
        'name',
        'provider',
        'provider_id',
        'fcm_token',
        'key',
        'phone',
        'commune_id',
        'address',
        'longitude',
        'latitude',
        'image',
        'ban',
        'email',
        'password',
        'validated',
        'code',
    ];

    public function getImageAttribute($value)
    {
        return $value ? strpos($value, ':') != false || strpos($value, 'www') != false || strpos($value, 'http') != false ? $value : url('storage/images/customers/'.$value) : asset('icons/user.png');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }

    public function commune(){
        return $this->belongsTo(Commune::class)->with('wilaya');
    }


    public function favorites()
    {
        return $this->belongsToMany(Product::class, 'favorites', 'customer_id', 'product_id');

    }

    public function notifications(){
        return $this->hasMany(CustomerNotification::class);
    }

    public function savings()
    {
        return $this->belongsToMany(Product::class, 'savings', 'customer_id', 'product_id');

    }


    public function devices(){
        return $this->hasMany(Customerdevice::class);
    }

}
