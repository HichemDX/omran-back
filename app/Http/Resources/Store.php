<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Store extends JsonResource
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
            'name' => $this->name,
            'image' => $this->image,
            'phone' => $this->phone,
            'email' => $this->email,
            'validated' => $this->validated == 1,
            'address' => $this->address,
            'commune' => new Commune($this->commune),
            'wilaya' => $this->commune == null ? null : new Wilaya($this->commune->wilaya),
            'distance' => 0,
            'delivery_wilayas' => $this->wilayas == null ? [] : WilayaCommunesResource::collection($this->wilayas)
        ];
    }
}
