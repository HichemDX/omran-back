<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id'
    ];

    protected $casts = [];

    public function getNameAttribute($value)
    {
        return url($value);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);

    }

}
