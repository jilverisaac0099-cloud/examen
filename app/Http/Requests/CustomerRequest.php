<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|required|min:3|max:255',
            'email' => 'string|required|email|max:255',
            'telephone' => 'string|required|min:7|max:255',
            'balance' => 'numeric|required',
            'credit_limit' => 'numeric|required',
            'discount' => 'numeric|required',
            'registration_date' => 'date|required',
            'customer_status' => 'string|required|min:3|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'El nombre solo permite caracteres',
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El mínimo de caracteres es 3',
            'name.max' => 'El maximo de caracteres es 255',

            'email.string' => 'El correo electronico solo permite caracteres',
            'email.required' => 'El correo electronico es requerido',
            'email' => 'Debe ser un correo electronico válido',
            'email.max' => 'El máximo de caracteres es 255',

            'telephone.string' => 'El teléfono solo permite caracteres',
            'telephone.required' => 'El telefono es requerido',
            'telephone.min' => 'El mínimo de caracteres es 7',
            'telephone.max' => 'El máximo de caracteres es 255',

            'balance.numeric' => 'El saldo solo permite números',
            'balance.required' => 'El saldo es requerido',

            'credit_limit.numeric' => 'El límite de crédito solo permite números',
            'credi_limit' => 'El limite de credito es requerido',

            'discount.numeric' => 'El descuento solo permite números',
            'discount.required' => 'El descuento es requerido',

            'registration_date.date' => 'Debe ser una fecha de registro válida',
            'registration_date.required' => 'La fecha de registro es requerida',

            'customer_status.string' => 'El estado de cliente solo permite caracteres',
            'customer_status.required' => 'El estado de cliente es requerido',
            'customer_status.min' => 'El mínimo de caracteres es 3',
            'customer_status.max' => 'El máximo de caracteres es 20',
        ];
    }
}
