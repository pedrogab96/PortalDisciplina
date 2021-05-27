<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassificationDisciplineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'classification_id' => $this->classification_id,
            'discipline_id' => $this->discipline_id,
            'value' => $this->value,
            'classification' => new ClassificationResource($this->whenLoaded('classification')),
            'discipline' => new DisciplineResource($this->whenLoaded('discipline')),
        ];
    }
}
