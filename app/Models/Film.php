<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Film extends Model
{
    use Sluggable, Notifiable, SluggableScopeHelpers;

    protected $fillable = [
        'title',
        'title_eng',
        'slug',
        'description',
        'avatar',
        'content',
        'release_date',
        'run_time',
        'quality',
        'resolution',
        'language',
        'viewed',
        'distributor',
        'director_id',
        'status',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * ==================== Relationships ===================================
     */

    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }

    public function trailers()
    {
        return $this->hasMany('App\Models\Trailer');
    }

    public function director()
    {
        return $this->belongsTo('App\Models\Director');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Models\Actor', 'film_actor', 'film_id', 'actor_id')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_film', 'film_id', 'category_id')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'tag_film', 'film_id', 'tag_id')->withTimestamps();
    }

    public function storages()
    {
        return $this->belongsToMany('App\Models\User', 'storages', 'film_id', 'user_id')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function trackers()
    {
        return $this->hasMany('App\Models\Tracker');
    }
}
