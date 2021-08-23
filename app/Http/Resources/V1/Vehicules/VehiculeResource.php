<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehiculeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'color' => $this->color,
            'model' => $this->model,
            'plate_car' => $this->plate_car,
            'type' => $this->type,
            'driver_id' => $this->driver_id,
            
        ];
    }
}
