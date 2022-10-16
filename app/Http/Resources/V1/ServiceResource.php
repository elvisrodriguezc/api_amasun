<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'location_id'=>$this->location_id,
            'location' => $this->location->name,
            'service' => $this->name,
            'duration' => $this->duration,
            'image' => $this->image,
            'price_adult' => $this->price_adult,
            'price_child' => $this->price_child,
            'about' => $this->about,
            'includes' => $this->includes,
            'recommendations' => $this->recommendations,
            'status' => $this->status,
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
