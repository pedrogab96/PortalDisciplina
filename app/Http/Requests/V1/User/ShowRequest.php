<?php

namespace App\Http\Requests\V1\User;

use App\Enums\RoleName;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ShowRequest
 * @package App\Http\Requests\V1\User
 *
 * @urlParam user integer required O identificador do usuário. Example: 1
 */
class ShowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
