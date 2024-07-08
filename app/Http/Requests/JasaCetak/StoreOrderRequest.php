<?php

namespace App\Http\Requests\JasaCetak;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'size' => 'required|string',
            'paper_type' => 'required|string',
            'quantity' => 'required|integer|min:1', // corrected min rule syntax
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'notes' => 'nullable|string',
            'total_price_product' => 'required|numeric',
        ];
    }
}
