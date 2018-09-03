<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Question extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'               => is_null($this->id) ? null : $this->getRouteKey(),
            'identifier'       => $this->identifier,
            'data'             => $this->data,
            'linker'           => $this->linker,
            'section'          => new Section($this->section),
            'response'         => isset($this->response) ? $this->response : null,
            'section_question' => isset($this->section_question) ? $this->section_question : null,
        ];
    }
}