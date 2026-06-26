<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'internal_code' => 'string|required|min:3|max:50',
            'detailed_description' => 'string|required|min:3|max:255',
            'price' => 'numeric|required',
            'cost' => 'numeric|required',
            'availabe_status' => 'string|required|min:3|max:20',
            'entry_status' => 'date|required',
        ];
    }

    public function messages(): array
    {
        return [
            'internal_code.string' => 'El codigo interno solo permite caracteres',
            'internal_code.required' => 'El codigo interno es requerido',
            'internal_code.min' => 'El minino de caracteres es 3',
            'internal_code.max' => 'El máximo de caracteres es 50',

            'detailed_description.string' => 'La descripción detallada solo permite caracteres',
            'detailed_descrption' => 'La descripcion de tallada  es requerido',
            'detailed_description.min' => 'El mínimo de caracteres es 3',
            'detailed_description.max' => 'El máximo de caracteres es 255',

            'price.numeric' => 'El precio solo permite números',
            'price.required' => 'El precio es requerido',

            'cost.numeric' => 'El costo solo permite números',
            'cost.required' => 'El costo es requerido',

            'available_status.string' => 'El estado solo permite caracteres',
            'available_status.required' => 'El estado es requerido',
            'available_status.min' => 'El mínimo de caracteres es 3',
            'available_status.max' => 'El máximo de caracteres es 20',

            'entry_status.date' => 'Debe ser un estado de entrada válida',
            'entry_status.required' => 'El estado de entrada es requerida',
        ];
    }
}
