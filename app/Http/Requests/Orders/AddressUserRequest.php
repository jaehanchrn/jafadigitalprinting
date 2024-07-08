<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class AddressUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address' => 'required|string|max:255',
            'payment_confirmation_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
