<?php

namespace App\Http\Requests\V1\Discipline;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
/**
 * Class StoreRequest
 * @package App\Http\Requests\V1\Discipline
 *
 * @bodyParam name string required Nome da disciplina. Example: Exemplo II
 * @bodyParam code string required Código da disciplina. Example: EXII
 * @bodyParam synopsis string required Sínopse da disciplina. Example: Esta disciplina é um exemplo
 * @bodyParam difficulties string required Deve ser igual ao campo `password`. Example: mudar@123
 * @bodyParam professor_id integer Id do professor. Example: 1
 * @bodyParam media-trailer string Link do Youtube. Example: https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @bodyParam media-podcast string Link do Youtube. Example: https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @bodyParam media-video string Link do Youtube. Example: https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @bodyParam media-material string Link do Google Drive. Example: https://drive.google.com/file/d/1Xaeu31fSQY3bNmg38uM3P9fRl8ml3zes/view?usp=sharing
 * @bodyParam classificacao-metodologias-classicas integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-metodologias-ativas integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-discussao-social integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-discussao-tecnica integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-abordagem-teorica integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-abordagem-pratica integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-av-provas integer Numero entre 0 e 6. Example: 1
 * @bodyParam classificacao-av-atividades integer Numero entre 0 e 6. Example: 1
 * */
class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->is_admin || Auth::user()->is_professor;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:40',],
            'code' => ['required', 'max:10',],
            'synopsis' => ['nullable', 'max:5000',],
            'difficulties' => ['nullable', 'max:5000',],
            'media-trailer' => ['nullable', 'max:250',],
            'media-video' => ['nullable', 'max:250',],
            'media-podcast' => ['nullable', 'max:250',],
            'media-material' => ['nullable', 'max:250',],
        ];
    }
}
