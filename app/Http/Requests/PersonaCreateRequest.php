<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaCreateRequest extends FormRequest
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
            "ci"=>"integer|unique:persona",
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
