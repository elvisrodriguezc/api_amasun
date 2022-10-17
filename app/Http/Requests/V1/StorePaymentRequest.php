<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
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
            "booking_id"=>"required",
            "payment_method_id"=>"required",
            "card_number",
            "card_holder_name",
            "op_date",
            "op_time",
            "source_id",
            "device_session_id",
            "amount"=>"required",
            "currency"=>"required",
            "description"=>"required",
            "use_card_points"
        ];
    }
}
