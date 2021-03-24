<?php

namespace App\Http\Requests\Discipline;

use Illuminate\Foundation\Http\FormRequest;

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
            'inputSubject' => 'required|max:40',
            'inputCode' => 'required|max:10',
            'teacher' => 'required|max:70',
            'teacherEmail' => 'required|max:70',

            'sinopse' => 'max:5000',
            'classificacao' => 'max:5000',
            'obstaculos' => 'max:5000',
            'trailer' => 'max:250',
            'video' => 'max:250',
            'podcast' => 'max:250',
            'material' => 'max:250',
        ];
    }

    /*
    public function messages()
    {
        return [
            'required' => 'O atributo :attribute não pode estar em branco.',
            'inputSubject.max' => 'Máximo de 40 caracteres!',
            'teacher.max' => 'Máximo de 70 caracteres!',
            'teacherEmail.max' => 'Máximo de 70 caracteres!',
            'inputCode.max' => 'Máximo de 10 caracteres!',
            'sinopse.max' => 'Máximo de 5000 caracteres!',
            'classificacao.max' => 'Máximo de 5000 caracteres!',
            'obstaculos.max' => 'Máximo de 5000 caracteres!',
            'trailer.max' => 'Máximo de 250 caracteres!',
            'video.max' => 'Máximo de 250 caracteres!',
            'podcast.max' => 'Máximo de 250 caracteres!',
            'material.max' => 'Máximo de 250 caracteres!',
        ];
    }
*/
}
