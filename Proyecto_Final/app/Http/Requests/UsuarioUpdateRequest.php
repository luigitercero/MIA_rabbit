<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            
            'email' => 'required|email|unique:users',
            'telefono'=> 'required|numeric',
            'nacimiento'=> 'required',
            'fregistro'=> 'required',
            'direccion'=> 'required',
            'roll_cod'=> 'required',
            'genero_cod'=> 'required'  
        ];
    }
}
