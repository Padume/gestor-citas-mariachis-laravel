<?php

namespace Mariachis\Http\Requests;

use Mariachis\Http\Requests\Request;

class UsuarioRequest extends Request
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
        return
        [
            'nombre' => 'required',
            'apellido' => 'required',
            // Falta' >>>  email' => 'required|email',
            'usuario' => 'required',
            'password' => 'required',
            'direccion' => 'required'
            
        ];
    }
}
