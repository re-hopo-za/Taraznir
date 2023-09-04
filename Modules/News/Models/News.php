<?php

namespace Modules\News\Models;

use App\Trait\CommonModelMethodsTrait;
use App\Trait\CommonScopesTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\News\Database\factories\NewsFactory;

class News extends Model
{
    use CommonScopesTrait ,CommonModelMethodsTrait;

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
