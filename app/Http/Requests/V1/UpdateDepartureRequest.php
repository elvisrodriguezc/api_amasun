<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartureRequest extends FormRequest
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
            'user_id',
            'boat_id',
            'service_id',
            'location_id',
            'depart_date',
            'depart_time',
            'seats_enable',
            'duration',
            'price_adult',
            'price_child',
            'status'
        ];
    }
}
