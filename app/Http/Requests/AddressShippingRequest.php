<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class AddressShippingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'customer_id'        => 'required|exists:customers,id',
            'number'             => 'nullable|string|max:50',
            'street'             => 'required|string|min:3|max:100',
            'neighborhood'       => 'required|string|min:3|max:100',
            'city'               => 'required|string|min:3|max:100',
            'reference_location' => 'nullable|string|max:255',
            'state_address'      => 'required|string|in:activo,inactivo',
        ];
    }

    /**
     * Custom message for validation errors.
     */
    public function messages(): array
    {
        return [
            'customer_id.required' => 'Debe seleccionar un cliente.',
            'customer_id.exists'   => 'El cliente seleccionado no existe en la base de datos.',

            'street.required'      => 'La calle es obligatoria.',
            'street.min'           => 'La calle debe tener al menos 3 caracteres.',
            'street.max'           => 'La calle no puede exceder los 100 caracteres.',

            'neighborhood.required' => 'El barrio/colonia es obligatorio.',
            'neighborhood.min'      => 'El barrio debe tener al menos 3 caracteres.',
            'neighborhood.max'      => 'El barrio no puede exceder los 100 caracteres.',

            'city.required'        => 'La ciudad es obligatoria.',
            'city.min'             => 'La ciudad debe tener al menos 3 caracteres.',
            'city.max'             => 'La ciudad no puede exceder los 100 caracteres.',

            'state_address.required' => 'El estado de la dirección es obligatorio.',
            'state_address.in'       => 'El estado debe ser activo o inactivo.',
        ];
    }
}
