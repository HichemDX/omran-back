<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourcesStoreNotification extends JsonResource
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
            'id' => $this->id,
            'type' => $this->type,
            'name_fr' => $this->name_fr,
            'name_ar' => $this->name_ar,
            'description_fr' => $this->description_fr,
            'description_ar' => $this->description_ar,
            'read' => $this->read,
            'customer' => $this->customer,
            'order_id' => $this->order_id,
            'created_at' => $this->created_at
        ];
    }
}
