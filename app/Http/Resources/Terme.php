<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Terme extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'body_ar' => $this->terms_ar,
            'body_fr' => $this->terms_fr
        ];
    }
}
