<?php

namespace App\Http\Requests\V1\Discipline;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 * @package App\Http\Requests\V1\Discipline
 *
 * @queryParam per_page integer Quantidade de entidades por página. Example: 10
 * @queryParam page integer Página da paginação das entidades. Example: 1
 * @queryParam search string Termo de busca, pode ser o nome do professor,
 * nome da disciplina ou código da disciplina. Example: FMC I, Fundamentos Matematicos da Computação
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
            //
        ];
    }
}
