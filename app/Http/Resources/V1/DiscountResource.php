<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountResource extends JsonResource
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
            'description' => $this->description,
            'amount'=>$this->amount,
            'status'=>$this->status,
        ];
    }
		// sending a meta info "res"
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
