<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderProduct extends JsonResource
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
            "id" => (int)$this->id,
            "name" => $this->name,
            "store_id" => (int)$this->store->id,
            "price" => $this->pivot->price,
            "unit_ar" => $this->unite->name_ar,
            "unit_fr" => $this->unite->name_fr,
            "quantity"=> $this->pivot->qty,
        ];
    }
}

