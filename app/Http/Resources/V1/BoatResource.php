<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\LocationResource;

class BoatResource extends JsonResource
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
            'location' => new LocationResource($this->location),
            'name'=>$this->name,
            'seatscount'=>$this->seatscount,
            'price_adult'=>$this->price_adult,
            'price_child'=>$this->price_child,
            'image'=>$this->image,
            'status'=>$this->status,
            'created_at'=>$this->created_at->format('Y-m-d H:i:s'),
            'updated_at'=>$this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
