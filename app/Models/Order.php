<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'commune_id',
        'grand_total',
        'shipping_cost',
        'code',
        'store_id'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id')->withPivot('qty', 'subtotal', 'price')->with('unite');
    }

    public function store(){
        return $this->belongsTo(Store::class)->with('commune');
    }

    public function customer(){
        return $this->belongsTo(Customer::class)->with('commune');
    }

    public function commune(){
        return $this->belongsTo(Commune::class)->with('wilaya');
    }
    
}
