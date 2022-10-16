<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartureRequest extends FormRequest
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
            "user_id"=>"required",
            "boat_id"=>"required",
            "service_id"=>"required",
            "location_id"=>"required",
            "depart_date"=>"required",
            "depart_time"=>"required",
            "seats_enable"=>"required",
            "duration"=>"required",
            "price_adult"=>"required",
            "price_child"=>"required",
            "status"=>"required",
        ];
    }
}
