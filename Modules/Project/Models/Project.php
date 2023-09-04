<?php

namespace Modules\Project\Models;

use App\Trait\CommonModelMethodsTrait;
use App\Trait\CommonScopesTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Project\Database\factories\ProjectFactory;

class Project extends Model
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

    protected static function newFactory(): ProjectFactory
    {
        return ProjectFactory::new();
    }

}
