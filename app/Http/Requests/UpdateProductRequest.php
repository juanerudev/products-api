<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => ['nullable', 'max:255', 'unique:products,product_name'],
            'product_description' => ['nullable', 'max:1000'],
            'product_price' => ['nullable', 'numeric', 'min:0'],
            'product_stock' => ['nullable', 'integer', 'min:0'],
            'product_status' => ['nullable', 'boolean'],
        ];
    }
}
