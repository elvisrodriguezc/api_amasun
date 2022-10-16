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
            'user'=> [
                'id'=>$this->user->_id,
                'name'=>$this->user->name,
            ],
            'boat' => [
                'id'=>$this->boat->id,
                'name'=>$this->boat->name,
                'seatscount'=>$this->boat->seatscount,
                'status'=>$this->boat->status,
            ],
            'service'=> [
                'id'=> $this->service->id,
                'name'=> $this->service->name,
                'image'=> $this->service->image,
                'about'=> $this->service->about,
                'includes'=> $this->service->includes,
                'recommendations'=> $this->service->recommendations,
                'status'=> $this->service->status,
            ],
            'location'=>[
                'id'=>$this->location->id,
                'name'=>$this->location->name,
            ],
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
