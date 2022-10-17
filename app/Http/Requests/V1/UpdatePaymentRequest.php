<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'booking_id',
            'payment_method_id',
            'card_number',
            'card_holder_name',
            'op_date',
            'op_time',
            'source_id',
            'device_session_id',
            'amount',
            'currency',
            'description',
            'use_card_points'
        ];
    }
}

