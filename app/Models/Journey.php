<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ContainsSoftDeletableUniques;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journey extends Model
{
    use ContainsSoftDeletableUniques, SoftDeletes;

    const SOFT_DELETION_TOKEN = 'deleted_at_millis';

    /**
     * The attributes that can be filled by the developer.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'tree_id', 'is_finished'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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

    public function paths()
    {
        return $this->hasMany(Path::class);
    }

    public function lastPath()
    {
        return $this->paths()->orderBy('id', 'desc')->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function finished()
    {
        return $this->is_finished == 1;
    }

    public function linkers()
    {
        return $this->hasMany(Path::class)->select('linker')->get()->toArray();
    }    
}
