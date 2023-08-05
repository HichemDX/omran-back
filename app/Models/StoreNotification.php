<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'store_id',
        'type',
        'name_fr',
        'name_ar',
        'description_fr',
        'description_ar',
        'read',
        'order_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }


}
