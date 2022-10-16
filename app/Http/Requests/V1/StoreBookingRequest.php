<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'departure_id'=>"required",
            'customer_id'=>"required",
            'date'=>"required",
            'time'=>"required",
            'payment_code'=>"required",
            'payment_datetime'=>"required",
            'adults'=>"required",
            'childs'=>"required",
            'status'=>"required",
        ];
    }
}
