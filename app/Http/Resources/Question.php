<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Question extends JsonResource
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
            'question_ar' => $this->question_ar,
            'question_fr' => $this->question_fr,
            'reponse_ar' => $this->reponse_ar,
            'reponse_fr' => $this->reponse_fr
        ];
    }
}

