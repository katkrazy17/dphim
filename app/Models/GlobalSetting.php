<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class GlobalSetting extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'company_name',
        'company_phone',
        'company_email',
        'company_facebook',
        'company_youtube',
        'company_googleplus',
        'company_address',
        'company_copyright',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'company_name'
            ]
        ];
    }
}
