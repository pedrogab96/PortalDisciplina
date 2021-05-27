<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfessorResource extends JsonResource
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
            'name' => $this->name,
            'profile_pic_link' => $this->profile_pic_link,
            'public_email' => $this->public_email,
            'user_id' => $this->user_id,
            'user' => new UserResource($this->whenLoaded('user')),
            'disciplines' => new DisciplineCollection($this->whenLoaded('disciplines')),
        ];
    }
}
