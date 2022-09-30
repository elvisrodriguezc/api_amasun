<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'departure' => [
               'departure_id'=>$this->departure->id,
               'departure_date'=>$this->departure->depart_date,
               'departure_time'=>$this->departure->depart_time,
               'price_adult'=>$this->departure->price_adult,
               'price_child'=>$this->departure->price_child,
            ],
            'customer'=> [
                'customer_id'=>$this->customer->id,
                'firstname' => $this->customer->first_name,
                'lastname' => $this->customer->last_name,
                'document_id' => $this->customer->document_id,
                'document_number' => $this->customer->document_number,
                'email' => $this->customer->email,
                'phone' => $this->customer->phone,
            ],
            'date' => $this->date,
            'time' => $this->time,
            'time' => $this->time,
            'payment_code' => $this->payment_code,
            'payment_datetime' => $this->payment_datetime,
            'adults' => $this->adults,
            'childs' => $this->childs,
            'status' => $this->status,
        ];
    }
}
