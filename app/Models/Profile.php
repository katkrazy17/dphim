<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone',
        'avatar',
        'address',
        'date_of_birth',
        'country',
        'user_id',
    ];

    /**
     * ==================== Relationships ===================================
     */

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
