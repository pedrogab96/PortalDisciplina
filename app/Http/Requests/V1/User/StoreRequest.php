<?php

namespace App\Http\Requests\V1\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package App\Http\Requests\V1\User
 *
 * @bodyParam name string required Nome completo do usuário. Example: Fulano da Silva
 * @bodyParam email string required E-mail. Example: patient@gmail.com
 * @bodyParam password string required Senha. Example: mudar@123
 * @bodyParam password_confirmation string required Deve ser igual ao campo `password`. Example: mudar@123
 * @bodyParam role_id integer Papel do usuário. Example: 1
 */
class StoreRequest extends FormRequest
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
            // User
            'name' => ['required', 'max:250',],
            'email' => ['required', 'max:250', 'unique:users,email',],
            'password' => ['required', 'max:250', 'confirmed',],
            'role_id' => ['nullable', 'exists:roles,id',],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            // User
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
            'password_confirmation' => 'confirmação de senha',
            'role_id' => 'papel',
        ];
    }
}
