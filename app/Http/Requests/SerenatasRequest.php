<?php

namespace Mariachis\Http\Requests;

use Mariachis\Http\Requests\Request;

class SerenatasRequest extends Request
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
            'direccionSerenata' => 'required',
            'horaSerenata' => 'required',
            'fechaSerenata' => 'required',
            'valorSerenata' => 'required'
        ];
    }
}
