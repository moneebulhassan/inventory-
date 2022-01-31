<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProformaRequest extends FormRequest
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
//            'name' => 'required|string|max:100',
            'date' => 'required|date',
//            'ref_number' => 'required|numeric|max:10000',
            'due_date' => 'required|date',
            'country_of_origin' => 'required|string|max:100',
            'port_of_loading' => 'required|string|max:100',
            'shipment_period' => 'required|string|max:100',
            'payment_terms' => 'required|string|max:100',
            'insurance' => 'required|string|max:100',
            'port_of_discharge' => 'required|string|max:100',
            'final_destination' => 'required|string|max:100',
            'inspection' => 'required|string|max:100',
            'currency' => 'required|string|max:100',
            'client_id' => 'required',
        ];
    }
}
