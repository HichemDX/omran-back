<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
            "store_id" => $this->store->id,
            "store_name" => $this->store->name,
            "store_logo" => $this->store->image,
            "code" => $this->code,
            "shipping_cost" => $this->shipping_cost,
            "grand_total" => $this->grand_total,
            "status" => $this->status,
            "created_at" => $this->created_at,
            "customer" => new Customer($this->customer),
            "shipping_info" =>
            [
                "name" => $this->name,
                "phone" => $this->phone,
                "wilaya" => $this->commune->wilaya->code,
                "commune" => $this->commune->name_fr,
                "address" => $this->address
            ],
            "list_products" => OrderProduct::collection($this->products)
        ];
    }
}
