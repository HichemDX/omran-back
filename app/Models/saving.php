<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saving extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_id'
    ];
    
}
