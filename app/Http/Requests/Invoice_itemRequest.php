<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Invoice_itemRequest extends FormRequest
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
            'invoice_id' => 'required|string',
            'product_id' => 'required|string',
            'quantity' => 'required|string',
            'price' => 'required|numeric',
        ];
    }
}
