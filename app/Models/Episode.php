<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'film_id',
        'episode',
        'link',
        'status',
    ];

    /**
     * ==================== Relationships ===================================
     */

    public function films()
    {
        return $this->belongsTo('App\Models\Film');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'histories', 'episode_id', 'user_id')->withTimestamps();
    }
}
