<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
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
            'date' => 'required|date',
            'currency' => 'required|string',
            'current_balance' => 'required|string',
            'payment_amount' => 'required|string',
            'balance_due' => 'required|string',
            'method_of_payment' => 'required|string',
            'payment_reference' => 'required|string',
        ];
    }
}
