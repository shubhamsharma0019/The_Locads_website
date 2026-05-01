<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', Rule::in(['product', 'rent'])],
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['nullable', 'string', 'max:100'],
            'category' => ['required', 'string', 'max:255'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
            'price' => ['nullable', 'numeric', 'min:0', 'required_if:type,product'],
            'rent_price' => ['nullable', 'numeric', 'min:0', 'required_if:type,rent'],
            'billing_period' => ['nullable', 'string', 'max:50'],
            'best_for' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'features' => ['nullable', 'string'],
            'specifications' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
        ];
    }
}
