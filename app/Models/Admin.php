<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Sluggable, Notifiable, SluggableScopeHelpers;

    protected $fillable = [
        'admin_name',
        'first_name',
        'last_name',
        'slug',
        'email',
        'gender',
        'phone',
        'avatar',
        'password',
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

}
