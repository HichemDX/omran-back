<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreRating extends Model
{
  protected $fillable = ['store_id', 'rating', 'comment'];

  public function store()
  {
    return $this->belongsTo(Store::class);
  }


}
