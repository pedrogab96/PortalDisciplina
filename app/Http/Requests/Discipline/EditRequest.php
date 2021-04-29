<?php

namespace App\Http\Requests\Discipline;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $disciplineId = $this->route()->parameter('disciplina');
        if (!is_numeric($disciplineId)) {
            return false;
        }

        return Auth::user()->canDiscipline($disciplineId);
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
