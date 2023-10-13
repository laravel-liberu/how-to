<?php

namespace LaravelLiberu\HowTo\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Video extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'poster' => new Poster($this->whenLoaded('poster')),
            'tagList' => $this->tagList(),
        ];
    }
}
