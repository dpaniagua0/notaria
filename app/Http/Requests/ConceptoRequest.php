<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConceptoRequest extends Request
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
            'name' => 'required|min:3',
            'display_name' => 'required|min:3'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Este campo es requerido',
            'name.min' => 'Debe tener minimo :min caracteres',
            'display_name.required' => 'Este campo es requerido',
            'display_name.min' => 'Dede tener minimo :min caracteres'
        ];
    }
}
