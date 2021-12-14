<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehiclesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($return_search)
    {
        return [
            'propietario' => $this->license_plate,
            'cedula' => $this->vehicle_type,
            'usuario' => $this->owners
        ];
    }
}
