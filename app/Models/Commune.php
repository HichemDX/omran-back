<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;


    public function stores()
    {
        return $this->hasMany(Store::class, 'commune_store');

    }



    public function wilaya(){
        return $this->belongsTo(Wilaya::class);
    }


}
