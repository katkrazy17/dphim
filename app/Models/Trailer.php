<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $fillable = [
        'film_id',
        'link',
    ];

    /**
     * ==================== Relationships ===================================
     */

    public function films()
    {
        return $this->belongsTo('App\Models\Film');
    }
}
