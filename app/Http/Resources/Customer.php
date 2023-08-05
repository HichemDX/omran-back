<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Customer extends JsonResource
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
            'phone' => $this->phone,
            'image' => $this->image,
            'ban' => (int)$this->ban == 1 ? true : false,
            'address' => $this->address,
            'commune' => new Commune($this->whenLoaded('commune')),
            'wilaya' => $this->commune == null ? null : new Wilaya($this->commune->wilaya),
            'email' => $this->email,
            'validated' => $this->validated == 1,
        ];
    }
}
