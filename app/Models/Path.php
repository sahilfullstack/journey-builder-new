<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ContainsSoftDeletableUniques;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cog\Laravel\Optimus\Traits\OptimusEncodedRouteKey;

class Path extends Model
{
    use ContainsSoftDeletableUniques, SoftDeletes, OptimusEncodedRouteKey;

    const SOFT_DELETION_TOKEN = 'deleted_at_millis';

    /**
     * The attributes that can be filled by the developer.
     *
     * @var array
     */
    protected $fillable = [
        'journey_id', 'node_id', 'linker'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'linker'   => 'array',
    ];

    /**
     * Limit the search to only not deleted elements.
     *
     * @param $query
     * @return void
     */
    public function scopeNotDeleted($query)
    {
        return $query->whereNull('deleted_at')->where(self::SOFT_DELETION_TOKEN, 0);
    }

    public function journey()
    {
        return $this->belongsTo(Journey::class);
    }

    public function node()
    {
        return $this->hasOne(Node::class, 'id', 'node_id');
    }
}
