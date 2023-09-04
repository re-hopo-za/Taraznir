<?php

namespace Modules\Service\Models;

use App\Trait\CommonModelMethodsTrait;
use App\Trait\CommonScopesTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Service\Database\factories\ServiceFactory;

class Service extends Model
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

    protected static function newFactory(): ServiceFactory
    {
        return ServiceFactory::new();

    }
}
