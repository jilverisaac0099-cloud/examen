<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_customer' => 'integer|required',
            'id_address' => 'integer|required',
            'date_creation' => 'date|required',
            'subtotal' => 'numeric|required',
            'iba' => 'numeric|required',
            'grand_total' => 'numeric|requerid',
            'additional_note' => 'string|nullable|max:255',
            'Order_status' => 'string|required|min:3|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'id_costumer.integer' => 'El id de cliente solo permite números enteros',
            'id_costumer.required' => 'El id de cliente es requerido',

            'id_address.integer' => 'El id de dirección solo permite números enteros',
            'id_address.required' => 'El id de direcion es requerido',

            'date_creation.date' => 'Debe ser una fecha de creacion válida',
            'date_creation.required' => 'La fecha de creacion es requerido',

            'subtotal.numeric' => 'El subtotal solo permite números',
            'subtotal.required' => 'El subtotal es requerido',

            'iva.numeric' => 'El impuesto solo permite números',
            'iva.required' => 'El impuesto es requerido',

            'grand_total.numeric' => 'El total solo permite números',
            'grand_total.required' => 'El campo es requerido',

            'additional_note.string' => 'Las notas solo permiten caracteres',
            'additional_note.max' => 'El máximo de caracteres es 255',

            'Order_status' => 'El estado del pedido solo permite caracteres',
            'order_status' => 'El estado del pedido es requerido',
            'Order_status.min' => 'El mínimo de caracteres es 3',
            'order_status.max' => 'El máximo de caracteres es 20',
        ];
    }
}
