<?php

namespace App\Http\Requests\V1\User;

use App\Enums\RoleName;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\V1\User
 *
 * @queryParam per_page integer Quantidade de entidades por página. Example: 10
 * @queryParam page integer Página da paginação das entidades. Example: 1
 * @queryParam search string Termo de busca, pode ser o nome ou e-mail do usuário. Example: Fulano
 */
class IndexRequest extends FormRequest
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
