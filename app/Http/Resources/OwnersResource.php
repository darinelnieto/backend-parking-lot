<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($return_search)
    {
        return [0 => [
            'id' => $this->id,
            'name' => $this->name,
            'identification_card' => $this->identification_card
        ]];
    }
}
