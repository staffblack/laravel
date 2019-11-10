<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocenteUpdateRequest extends FormRequest
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
            //'cedula'=>'required|unique:estudiante,cedula',
            'grado'=>'required',
            'nombres'=>'required',
            'apellidos'=>'required',
            'email'=>'required',
            'telefono'=>'required',
            'cargo'=>'required',
            'area'=>'required',
            'password'=>'required'
        ];
    }
}
