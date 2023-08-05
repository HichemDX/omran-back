<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerNotification extends JsonResource
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
            'title_ar' => $this->name_ar,
            'title_fr' => $this->name_fr,
            'description_fr' => $this->description_fr,
            'description_ar' => $this->description_ar,
            'see' => (int)$this->read == 1 ? true : false,
            'date' => $this->created_at,
            'store_id' => (int)$this->store_id,
            'store_name' => $this->store == null ? null : $this->store->name,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at
        ];
    }
}

