<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaUpdateRequest extends FormRequest
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

    public function rules()
    {
        return [
            "nombre"=>"regex:/^[A-Za-z. -]+$/",
            "apellido_paterno"=>"regex:/^[A-Za-z. -]+$/",
            "apellido_materno"=>"regex:/^[A-Za-z. -]+$/",
            "fecha_nacimiento"=>"required",
            "telefono"=>"integer"
        ];
    }
    public function messages()
    {
        return [
            "nombre.regex" => "Solo espacios y letras",
            "apellido_paterno.regex" => "Solo espacios y letras",
            "apellido_materno.regex" => "Solo espacios y letras",
        ];
    }
}
