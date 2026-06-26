<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FactoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|required|min:3|max:150',
            'identification_number' => 'string|required|min:3|max:50',
            'telephone' => 'string|required|min:7|max:20',
            'email' => 'string|required|email|max:25',
            'address' => 'string|required|min:3|max:25',
            'supplier_status' => 'string|required|min:3|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'El nombre solo permite caracteres',
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El minimo de caracateres es 3',
            'name.max' => 'El máximo de caracteres es 150',

            'identification_number.string' => 'El numero de identificación solo permite caracteres',
            'identification_number.required' => 'El numero de identificacion es requerido',
            'identification_number.min' => 'el minimo de caracteres es 3',
            'identification_number.max' => 'El máximo de caracteres es 50',

            'telephone.string' => 'El telefono solo permite caracteres',
            'telephone.required' => 'El telefono es requerido',
            'telephone.min' => 'El mínimo de caracteres es 7',
            'telephone.max' => 'El máximo de caracteres es 20',

            'email.string' => 'El correo electronico solo permite caracteres',
            'email.required' => 'El correo electronico es requerido',
            'email.email' => 'Debe ser un correo válido',
            'email.max' => 'El máximo de caracteres es 25',

            'address.string' => 'La direccion solo permite caracteres',
            'address.required' => 'La direccion es requerido',
            'address.min' => 'El minimo de caracteres es 3',
            'address.max' => 'El maximo de caracteres es 25',

            'supplier_status.string' => 'El estado de cliente solo permite caracteres',
            'supplier_status.required' => 'El estaspo del cliente es requerido',
            'supplier_status.min' => 'El minimo de caracteres es 3',
            'supplier_status.max' => 'El maximo de caracteres es 20',
        ];
    }
}
