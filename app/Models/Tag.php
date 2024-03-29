<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Tag extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * ==================== Relationships ===================================
     */

    public function films()
    {
        return $this->belongsToMany('App\Models\Film', 'tag_film', 'tag_id', 'film_id')->withTimestamps();
    }
}
