<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocumentRequest extends Request
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
            'client_name' => 'required|min:3',
            'upload_date' => 'required|date_format:Y-m-d',
            'price' => 'required|numeric',
            'arrive_date' => 'required|date_format:Y-m-d',
            'client_name' => 'required|min:3',
            'user_id' => 'required',
            'promoter_id' => 'required',
            'service_id' => 'required',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'file_number.required' => 'Este campo es requerido',
            'file_number.min' => 'Debe tener minimo :min caracteres',
            'client_name.required' => 'Este campo es requerido',
            'client_name.min' => 'Debe tener minimo :min caracteres',
            'upload_date.required' => 'Este campo es requerido',
            'upload_date.date' => 'Debe ser una fecha valida',
            'arrive_date.required' => 'Este campo es requerido',
            'arrive_date.date' => 'Debe ser una fecha valida',
            'price.required' => 'Este campo es requerido',
            'price.numeric' => 'Debe ser un numero valido',
            'client_name.required' => 'Este campo es requerido',
            'client_name.min' => 'Debe tener minimo :min caracteres',
            'user_id.required' => 'Debe seleccionar un tramitante',
            'promoter_id.required' => 'Debe seleccionar un gestor',
            'service_id.required' => 'Este campo es requerido',
            'status.required' => 'Este campo es requerido'
        ];
    }
}
