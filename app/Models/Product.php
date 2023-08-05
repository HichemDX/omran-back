<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'unite_id',
        'name',
        'description',
        'price',
        'qty',
        'min_qty'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);

    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id');

    }

    public function store()
    {
        return $this->belongsTo(Store::class)->with('commune');

    }

    public function unite(){
        return $this->belongsTo(Unite::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Customer::class, 'favorites', 'product_id', 'customer_id');

    }


    public function savings()
    {
        return $this->belongsToMany(Customer::class, 'savings', 'product_id', 'customer_id');

    }


    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

}
