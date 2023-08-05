<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderOffre extends Model
{
    use HasFactory, SoftDeletes;

    public function sliders(){
        return $this->hasMany(Slider::class, 'slider_offres_id');
    }
}
