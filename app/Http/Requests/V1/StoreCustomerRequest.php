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
            "document_id"=>"required",
            "document_number"=>"required|unique:customers,document_number",
            "first_name"=>"required",
            "last_name"=>"required",
            "email"=>"required|unique:customers,email",
            "phone"=>"required"
        ];
    }
}
