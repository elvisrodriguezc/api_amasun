<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'document' =>[
                'id' => $this->document->id,
                'name' => $this->document->name,
                'number' => $this->document_number,
            ],
            'country_code'=>$this->country_code,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'departamento'=>[
                'id' => $this->departamento->id,
                'name' => $this->departamento->name,
            ],
            'provincia'=>[
                'id' => $this->provincia->id,
                'name' => $this->provincia->name,
            ],
            'distrito'=>[
                'id' => $this->distrito->id,
                'name' => $this->distrito->name,
            ],
            'address'=>$this->address,
            'remark'=>$this->remark,
        ];
    }
    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
