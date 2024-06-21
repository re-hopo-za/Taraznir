<?php

namespace Modules\Service\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Modules\Service\Database\factories\ServiceFactory;
use Spatie\MediaLibrary\HasMedia;

class Service extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait;

    protected $appends = ['images'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'cover',
        'thumbnail',
        'status',
        'chosen',
    ];

    protected static function newFactory(): ServiceFactory
    {
        return ServiceFactory::new();

    }
}
