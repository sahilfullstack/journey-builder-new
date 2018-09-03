<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cog\Laravel\Optimus\Traits\OptimusEncodedRouteKey;

class Section extends Model
{
    use OptimusEncodedRouteKey;

    /**
     * The attributes that can be filled by the developer.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description', 'color_code'
    ];

    public function nodes()
    {
        return $this->hasMany(Node::class);
    }
}
