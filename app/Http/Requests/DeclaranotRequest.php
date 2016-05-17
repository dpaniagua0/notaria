<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DeclaranotRequest extends Request
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
            'upload_date' => 'required|date_format:Y-m-d',
            'sign_date' => 'required|date_format:Y-m-d',
            'type' => 'required|numeric',
            'street' => 'required|min:3',
            'colony' => 'required|min:3',
            'state' => 'required|min:3',
            'district' => 'required|min:3',
            'zip_code' => 'required|min:3|numeric',
            'description' => 'required',
            'exception' => 'required',
            'iva_quote' => 'required|numeric',
            'isr_quote' => 'required|numeric',
            'price' => 'required|numeric',
            'concepto_id' => 'required',
            'user_id' => 'required',
            'street2' => 'required|min:3',
            'colony2' => 'required|min:3',
            'district2' => 'required|min:3',
            'state2' => 'required|min:3',
            'zip_code2' => 'required|min:3'
        ];
    }
}
