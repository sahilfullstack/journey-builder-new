<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Path extends JsonResource
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
            // 'id'         => $this->getRouteKey(),
            // 'identifier' => $this->identifier,
            // 'data'       => $this->data,
            // 'linker'     => $this->linker,
            // 'path'       => new Path($this->whenLoaded('path'))
        ];
    }
}