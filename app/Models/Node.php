<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ContainsSoftDeletableUniques;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cog\Laravel\Optimus\Traits\OptimusEncodedRouteKey;

class Node extends Model
{
    use ContainsSoftDeletableUniques, SoftDeletes, OptimusEncodedRouteKey;

    const SOFT_DELETION_TOKEN = 'deleted_at_millis';

    /**
     * The attributes that can be filled by the developer.
     *
     * @var array
     */
    protected $fillable = [
        'tree_id', 'section_id', 'data', 'linker', 'identifier'
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
        'data'   => 'array',
        'linker' => 'array'
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

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
