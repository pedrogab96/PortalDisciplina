<?php

namespace App\Http\Requests\V1\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\V1\User
 *
 * @urlParam user integer required O identificador do usuário. Example: 1
 *
 * @bodyParam name string required Nome completo do usuário. Example: Fulano da Silva
 * @bodyParam email string required E-mail. Example: patient@gmail.com
 */
class UpdateRequest extends FormRequest
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
        $userId = $this->route()
            ->parameter('user');

        return [
            // User
            'name' => ['required', 'max:250',],
            'email' => ['required', 'max:250', 'unique:users,email,'.$userId,],
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
        ];
    }
}
