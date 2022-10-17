<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            "first_name"=>"required",
            "last_name"=>"required",
            "document_id"=>"required",
            "document_number"=>"required|unique:customers,document_number",
            "email"=>"required|unique:customers,email",
            "phone"=>"required",
            "country_code",
            "departamento_id",
            "provincia_id",
            "distrito_id",
            "address",
            "remark",
        ];
    }
}
