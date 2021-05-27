<?php

namespace App\Http\Requests\V1\Discipline;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\V1\Discipline\Concerns\CanDisciplineTrait;

/**
 * Class DestroyRequest
 * @package App\Http\Requests\V1\Discipline
 *
 * @urlParam discipline integer required O identificador da disciplina. Example: 1
 */
class DestroyRequest extends FormRequest
{
    use CanDisciplineTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->canDiscipline();
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
