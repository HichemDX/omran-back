<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommunePriceResource extends JsonResource
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
            'id' => (int)$this->id,
            'wilaya_id' => (int)$this->wilaya_id,
            'name_ar' => $this->name_ar,
            'name_fr' => $this->name_fr,
            'price' => $this->pivot->price,
        ];
    }
}
