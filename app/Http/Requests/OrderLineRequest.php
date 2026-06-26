<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderLineRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_article' => 'integer|required',
            'request_quantity' => 'integer|required',
            'unite_price' => 'numeric|required',
            'subtotal' => 'numeric|required',
        ];
    }

    public function messages(): array
    {
        return [
            'id_Article.integer' => 'El id de artículo solo permite números enteros',
            'id_Article.required' => 'El articulo es requerido',

            'request_quantity.integer' => 'La cantidad solicitada solo permite números enteros',
            'request_quantity.required' => 'La cantidad solicitada es requerida',

            'unite_price.numeric' => 'El precio unitario solo permite números',
            'unite_price.required' => 'El precio unitario es requerido',

            'subtotal.numeric' => 'El subtotal solo permite números',
            'subtotal.required' => 'El subtotal es requerido',
        ];
    }
}
