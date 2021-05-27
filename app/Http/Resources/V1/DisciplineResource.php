<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DisciplineResource extends JsonResource
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
            'code' => $this->code,
            'name' => $this->name,
            'synopsis' => $this->synopsis,
            'difficulties' => $this->difficulties,
            'professor_id' => (int)$this->professor_id,
            'professor' => new ProfessorResource($this->whenLoaded('professor')),
            'medias' => new MediaCollection($this->whenLoaded('medias')),
            'faqs' => new FaqCollection($this->whenLoaded('faqs')),
            'classifications' => new ClassificationCollection($this->whenLoaded('classifications')),
            'classificationsDisciplines' => new ClassificationDisciplineCollection($this->whenLoaded('classificationsDisciplines')),
        ];
    }
}
