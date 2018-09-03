<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Section extends JsonResource
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
            'id'          => $this->getRouteKey(),
            'title'       => $this->title, 
            'description' => $this->description, 
            'slug'        => $this->slug, 
            'color_code'  => $this->color_code  
        ];
    }
}