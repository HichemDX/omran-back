<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $casts = [
        'begin'  => 'date:Y-m-d',
        'end'  => 'date:Y-m-d',
        //'end' => 'datetime:Y-m-d H:00',
    ];

    public function getImageAttribute($value)
    {
        return url('storage/images/sliders/'.$value);
    }

    public function offre(){
        return $this->belongsTo(SliderOffre::class, 'slider_offres_id');
    }
}
