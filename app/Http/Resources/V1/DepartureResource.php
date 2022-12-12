<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartureResource extends JsonResource
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
            'depart_date'=>$this->depart_date,
            'depart_time'=>$this->depart_time,
            'seats_enable'=>$this->seats_enable,
            'duration'=>$this->duration,
            'price_adult'=>$this->price_adult,
            'price_child'=>$this->price_child,
            'user'=> [
                'id'=>$this->user->_id,
                'name'=>$this->user->name,
            ],
            'boat' => new BoatResource($this->boat),
            'service'=> new ServiceResource($this->service),
            'location'=>new LocationResource($this->location),
            'status'=>$this->status
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
