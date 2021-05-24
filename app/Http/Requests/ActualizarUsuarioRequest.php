<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarUsuarioRequest extends FormRequest
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
            "usuario" => "required|alpha_num",
            "correo" => "required|email|email:rfc,dns"
        ];
    }

    public function attributes()
    {
        return [
            "tipo" => "tipo de usuario",
        ];
    }
}
