<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            "location_id"=>"required",
            "name"=>"required|unique:services,name",
            "duration"=>"required",
            "image"=>"required",
            "price_adult"=>"required",
            "price_child"=>"required",
            "about"=>"required",
            "includes"=>"required",
            "recommendations"=>"required",
            "status"=>"required",
        ];
    }
}
