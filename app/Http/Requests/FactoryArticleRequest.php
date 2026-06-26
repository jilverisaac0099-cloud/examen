<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FabricaArticuloRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_factory' => 'integer|required',
            'id_article' => 'integer|required',
            'current_stock' => 'numeric|required',
            'negotiated_cost' => 'numeric|required',
            '' => 'string|required|min:3|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'id_factory.integer' => 'El id de fábrica solo permite números enteros',
            'id_factory.required' => 'El id de la fabrica es requerido',

            'id_article.integer' => 'El id de artículo solo permite números enteros',
            'id_article.required' => 'El id del articulo es requerido',

            'current_stock' => 'Las existencias solo permiten números',
            'current_stock.required' => 'Las existencias es requerido',

            'negotiated_cost.numeric' => 'El costo solo permite números',
            'negotiated_cost.required' => 'El costo es requerido',

            'delivery_time.string' => 'El tiempo de entrega solo permite caracteres',
            'delivery_time.required' => 'El tiempo de entrega es requerido',
            'delivery_time.min' => 'El mínimo de caracteres es 3',
            'delivery_time.max' => 'El máximo de caracteres es 50',
        ];
    }
}