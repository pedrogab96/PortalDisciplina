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
            'synopsis' => ['nullable', 'max:5000',],
            'classificacao' => ['nullable', 'max:5000',],
            'difficulties' => ['nullable', 'max:5000',],
            'media-trailer' => ['nullable', 'max:250',],
            'media-video' => ['nullable', 'max:250',],
            'media-podcast' => ['nullable', 'max:250',],
            'media-material' => ['nullable', 'max:250',],
        ];
    }
}
