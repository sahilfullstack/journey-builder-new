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
            'id'         => $this->id,
            'tree_id'    => $this->tree_id,
            'identifier' => $this->identifier,
            'data'       => $this->data,
            'linker'     => $this->linker,
        ];
    }
}