<?php

namespace App\Http\Requests\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LoginRequest
 * @package App\Http\Requests\V1\Auth
 *
 * @bodyParam email string required E-mail de acesso do usuário. Example: professor@gmail.com
 * @bodyParam password string required Senha de acesso do usuário. Example: mudar@123
 */
class LoginRequest extends FormRequest
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
            'email' => ['required', 'string', 'email',],
            'password' => ['required', 'string',],
        ];
    }
}
