<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Actor extends Model
{
    use Sluggable, Notifiable, SluggableScopeHelpers;

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
        return $this->belongsToMany('App\Models\Film', 'film_actor', 'actor_id', 'film_id')->withTimestamps();
    }
}
