<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status'
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
        return $this->belongsToMany('App\Models\Film', 'category_film', 'category_id', 'film_id')->withTimestamps();
    }
}
