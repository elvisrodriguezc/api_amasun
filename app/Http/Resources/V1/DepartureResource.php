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
            'user_id'=>$this->user_id,
            'user'=>$this->user->name,
            'boat_id'=>$this->boat_id,
            'boat'=>$this->boat->name,
            'service_id'=>$this->service_id,
            'service'=>$this->service->name,
            'location_id'=>$this->location_id,
            'location'=>$this->location->name,
            'depart_date'=>$this->depart_date,
            'depart_time'=>$this->depart_time,
            'seats_enable'=>$this->seats_enable,
            'duration'=>$this->duration,
            'price_adult'=>$this->price_adult,
            'price_child'=>$this->price_child,
            'status'=>$this->status,
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
