<?php

namespace Modules\News\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Modules\News\app\Database\factories\NewsFactory;
use Spatie\MediaLibrary\HasMedia;

class News extends Model implements HasMedia
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

    protected static function newFactory(): NewsFactory
    {
        return NewsFactory::new();
    }

}
