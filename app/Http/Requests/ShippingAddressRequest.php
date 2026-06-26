<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ShippingAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_costumer' => 'integer|required',
            'number' => 'integer|required',
            'street' => 'string|required|min:3|max:255',
            'neighborhood' => 'string|required|min:3|max:255',
            'city' => 'string|required|min:3|max:255',
            'reference_location' => 'string|required|min:3|max:25',
            'address_status' => 'string|required|min:3|max:25',
        ];
    }

    public function messages(): array
    {
        return [
            'id_costumer.integer' => 'El cliente solo permite números enteros',
            'id_costumer.required' => 'El cliente es requerido',

            'number.integer' => 'El número solo permite enteros',
            'number.required' => 'El numero es requerido',

            'street.string' => 'La calle solo permite caracteres',
            'street.required' => 'La calle es requerida',
            'street.min' => 'El minimo de caractere es 3',
            'street.max' => 'El maximo de caracteres es 255',

            'neighborhood.string' => 'El barrio solo permite caracteres',
            'neighborhood.required' => 'El barrio es requerido',
            'neighborhood.min' => 'El minimo de caracteres es 3',
            'neighborhood.max' => 'El maximo de caracteres es 255',

            'city.string' => 'La ciudad solo permite caracteres',
            'city.required' => 'La ciudad es requerido',
            'city.min' => 'El minimo de caracteres es 3',
            'city.max' => 'El máximo de caracteres es 255',

            'reference_location' => 'La referencia solo permite caracteres',
            'reference_location.required' => 'La referencia es requerida',
            'reference_location.min' => 'El mínimo de caracteres es 3',
            'reference_location.max' => 'El máximo de caracteres es 25',

            'address_status.string' => 'El estado solo permite caracteres',
            'addres_status.required' => 'El estados es requerido',
            'address_status.min' => 'El mínimo de caracteres es 3',
            'addres_status.max' => 'El máximo de caracteres es 25',
        ];
    }
}

