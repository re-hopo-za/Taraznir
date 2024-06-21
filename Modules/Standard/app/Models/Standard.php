<?php

namespace Modules\Standard\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Modules\Standard\app\Database\factories\StandardFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class Standard extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait ,HasRoles;

    protected $appends = ['images'];

    protected $fillable = [
        'title',
        'slug',
        'tag',
        'status',
        'chosen',
    ];

    protected static function newFactory(): StandardFactory
    {
        return StandardFactory::new();
    }

}
