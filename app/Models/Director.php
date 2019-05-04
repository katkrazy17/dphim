<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Director extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'first_name',
        'last_name',
        'slug',
        'job',
        'gender',
        'height',
        'weight',
        'blood_group',
        'hobby',
        'country',
        'avatar',
        'status',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['first_name', 'last_name'],
            ]
        ];
    }

    /**
     * ==================== Relationships ===================================
     */

    public function films()
    {
        return $this->hasMany('App\Models\Film');
    }
}
