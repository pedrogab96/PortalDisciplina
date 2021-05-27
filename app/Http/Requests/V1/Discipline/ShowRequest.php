<?php

namespace App\Http\Requests\V1\Discipline;

use App\Enums\RoleName;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ShowRequest
 * @package App\Http\Requests\V1\Discipline
 *
 * @urlParam user integer required O identificador da disciplina. Example: 1
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
