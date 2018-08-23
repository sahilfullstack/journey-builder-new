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
            'id'         => is_null($this->id) ? null : $this->getRouteKey(),
            'identifier' => $this->identifier,
            'data'       => $this->data,
            'linker'     => $this->linker,
            'response'   => isset($this->response) ? $this->response : null,            
        ];
    }
}