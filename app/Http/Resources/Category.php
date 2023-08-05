<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
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
            'name_fr' => $this->name_fr,
            'name_ar' => $this->name_ar,
            'parent' => $this->parent == null ? 0 : $this->parent,
            'icon' =>   $this->icon,
            //'products' => Product::collection($this->whenLoaded('products')),
        ];
    }
}
