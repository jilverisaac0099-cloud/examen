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
            'cost' => 'numeric|required',
            'tiempo_estimado_entrega' => 'string|required|min:3|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'id_fabrica.integer' => 'El id de fábrica solo permite números enteros',
            'id_fabrica.required' => 'El campo es requerido',

            'id_articulo.integer' => 'El id de artículo solo permite números enteros',
            'id_articulo.required' => 'El campo es requerido',

            'existencias_actuales.numeric' => 'Las existencias solo permiten números',
            'existencias_actuales.required' => 'El campo es requerido',

            'costo_negociado_prov.numeric' => 'El costo solo permite números',
            'costo_negociado_prov.required' => 'El campo es requerido',

            'tiempo_estimado_entrega.string' => 'El tiempo estimado solo permite caracteres',
            'tiempo_estimado_entrega.required' => 'El campo es requerido',
            'tiempo_estimado_entrega.min' => 'El mínimo de caracteres es 3',
            'tiempo_estimado_entrega.max' => 'El máximo de caracteres es 50',
        ];
    }
}