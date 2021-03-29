<?php

namespace App\Http\Requests\Discipline;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !is_null(Auth::user()->professor);
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
            'professor-name' => ['required', 'max:70',],
            'professor-email' => ['required', 'max:70',],
            'synopsis' => ['nullable', 'max:5000',],
            'classificacao' => ['nullable', 'max:5000',],
            'difficulties' => ['nullable', 'max:5000',],
            'media-trailer' => ['nullable', 'max:250',],
            'media-video' => ['nullable', 'max:250',],
            'media-podcast' => ['nullable', 'max:250',],
            'media-material' => ['nullable', 'max:250',],
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
