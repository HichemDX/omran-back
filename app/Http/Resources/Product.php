<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'description' => $this->description,
            'price' => $this->price,
            'qty' => $this->qty,
            'min_qty' => $this->min_qty,
            'product_image' => count($this->images) > 0 ? $this->images[0]->name : null,
            'images' => ImageResource::collection($this->images),
            'unit_ar' => $this->unite->name_ar,
            'unit_fr' => $this->unite->name_fr,
            'store_id' => $this->store->id,
            'store_name' => $this->store->name,
            'store_image' => $this->store->image,
            'delivery_wilayas' => $this->wilayas == null ? [] : WilayaCommunesResource::collection($this->wilayas),
            'address' => ($this->store->commune != null ? $this->store->commune->wilaya->name_fr." ,".$this->store->commune->name_fr : '')." ,".$this->store->address,
            'save' => $this->save ? true : false,
            'unite_id' => (int)$this->unite_id,
            'category_id' => count($this->categories) > 0 ? (int)$this->categories[0]->id : null,
            'category_Ar' => count($this->categories) > 0 ? $this->categories[0]->name_ar : null,
            'category_Fr' => count($this->categories) > 0 ? $this->categories[0]->name_fr : null,
        ];
    }
}


