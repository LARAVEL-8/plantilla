<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarUsuario extends FormRequest
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
            "tipo" => "required",
            "usuario" => "required|alpha_num|unique:App\Models\Usuario,usuario",
            "password" => "required",
            "correo" => "required|email|email:rfc,dns|unique:App\Models\Usuario,correo"
        ];
    }

    public function attributes()
    {
        return [
            "tipo" => "tipo de usuario",
            "password" => "contraseña"
        ];
    }
}
