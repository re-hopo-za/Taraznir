<?php

namespace Modules\Blog\Models;

use App\Trait\CommonModelMethodsTrait;
use App\Trait\CommonScopesTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Database\factories\BlogFactory;
use Spatie\MediaLibrary\HasMedia;

class Blog extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait;

    protected $appends = ['jalali_created_at' ,'images'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'status',
        'chosen',
    ];

    protected static function newFactory(): BlogFactory
    {
        return BlogFactory::new();
    }

}
