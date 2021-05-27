<?php

namespace App\Http\Requests\V1\Discipline\Concerns;

use Illuminate\Support\Facades\Auth;

trait CanDisciplineTrait
{
    /**
     * @return bool
     */
    protected function canDiscipline(): bool
    {
        $disciplineId = $this->route()->parameter('discipline');

        if (!is_numeric($disciplineId)) {
            return false;
        }

        return Auth::user()->canDiscipline($disciplineId);
    }
}
