<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'ip_add',
        'device',
        'browser_name',
        'browser_vesion',
        'browser_platform',
        'film_id'
    ];

    /**
     * ==================== Relationships ===================================
     */

    public function film()
    {
        return $this->belongsTo('App\Models\Film');
    }
}
