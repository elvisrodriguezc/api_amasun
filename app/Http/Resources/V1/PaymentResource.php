<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'booking_id' => $this->booking_id,
            'payment_method'=>[
                'id'=>$this->payment_method_id,
                'name'=>$this->payment_method->name,
                'payment_type'=>$this->payment_method->paymet_type
            ],
            'card_number' => $this->card_number,
            'card_holder_name'=>$this->card_holder_name,
            'op_date'=>$this->op_date,
            'op_time'=>$this->op_time,
            'source_id'=>$this->source_id,
            'device_session_id'=>$this->device_session_id,
            'amount'=>$this->amount,
            'currency'=>$this->currency,
            'description'=>$this->description,
            'use_card_points'=>$this->use_card_points
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }

}
