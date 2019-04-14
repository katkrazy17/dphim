<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'film_id',
        'content',
        'status',
    ];

    public function films()
    {
        return $this->belongsTo('App\Models\Film');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
