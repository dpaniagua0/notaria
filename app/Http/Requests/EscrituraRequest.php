<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EscrituraRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file_number' => 'required|min:3',
            'user_id' => 'required',
            'owner' => 'required|min:3',
            'price' => 'required|numeric',
            'arrive_date' => 'required|date',
            'upload_date' => 'required|date',
            'service_id' => 'required',
            'promoter_id' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Debe seleccionar un tramitante',
            'promoter_id.required' => 'Debe seleccionar un gestor',
            'file_number.required' => 'Este campo es requerido',
            'file_number.min' => 'Debe tener minimo :min caracteres',
            'arrive_date.required' => 'Este campo es requerido',
            'arrive_date.date' => 'Debe ser una fecha valida',
            'upload_date.required' => 'Este campo es requerido',
            'upload_date.date' => 'Debe ser una fecha valida',
            'owner.required' => 'Este campo es requerido',
            'owner.min' => 'Debe tener minimo :min caracteres',
            'price.required' => 'Este campo es requerido',
            'price.numeric' => 'Deber ser un numero valido',
            'service_id.required' => 'Este campo es requerido',
            'status.required' => 'Este campo es requerido'
        ];
    }
}
