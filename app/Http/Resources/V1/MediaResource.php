<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
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
            'title' => $this->title,
            'type' => $this->type,
            'url' => $this->url,
            'is_trailer' => $this->is_trailer,
            'discipline_id' => $this->discipline_id,
            'discipline' => new DisciplineResource($this->whenLoaded('discipline')),
        ];
    }
}
