<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'location_id'=>'required',
            'name'=>'required',
            'seatscount'=>'required',
            'price_adult'=>'required',
            'price_child'=>'required',
            'image',
            'status'
        ];
    }
}
