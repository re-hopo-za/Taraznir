<?php

namespace Modules\Project\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Modules\Project\database\factories\ProjectFactory;
use Spatie\MediaLibrary\HasMedia;

class Project extends Model implements HasMedia
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


    protected static function newFactory(): ProjectFactory
    {
        return ProjectFactory::new();
    }

}
