<?php

namespace App\Http\Requests\V1\Discipline;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DestroyRequest
 * @package App\Http\Requests\V1\User
 *
 * @urlParam user integer required O identificador da disciplina. Example: 1
 */
class DestroyRequest extends FormRequest
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
