<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnterCompetitionRequest extends FormRequest
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
            'quantity' => 'required|string',
            'product_id' => 'required|string|exists:products,id'
            'option' => 'required|string|exists:options,id'
            'total_amount' => 'required|string'
            //alter the tickets sold and remaining
            //user must not be able to take tickets more than allowed per user
            //link user with the option
            //elastic - search
        ];
    }
}
