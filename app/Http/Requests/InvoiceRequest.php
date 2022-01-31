<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'proforma_id' => 'required',
            'bl_num' => 'required|string',
            'vessel' => 'required|string',
            'no_of_container' => 'required|numeric',
            'port_of_loading' => 'required|string',
            'port_of_discharge' => 'required|string',
            'final_destination' => 'required|string',
            'payment_terms' => 'required|string',
        ];
    }
}

