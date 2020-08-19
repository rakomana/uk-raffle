<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\validation\Rule;

class AddressUpdateRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => [
                'required', 'digits_between:9,15',
                Rule::unique('users', 'phone_number')->ignore($this->user())
            ],
            'company_name' => 'nullable|string',
            'location_link' => 'nullable|url',
            'country' => 'nullable|string',
            'street_address' => 'required|string',
            'city' => 'required|string',
            'post_code' => 'nullable|string'
        ];
    }
}
