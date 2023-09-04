<?php

namespace Modules\Tutorial\Models;

use App\Trait\CommonModelMethodsTrait;
use App\Trait\CommonScopesTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Tutorial\Database\factories\TutorialFactory;

class Tutorial extends Model
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

    protected static function newFactory(): TutorialFactory
    {
        return TutorialFactory::new();
    }

}
