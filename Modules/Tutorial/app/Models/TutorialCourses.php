<?php

namespace Modules\Tutorial\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class TutorialCourses extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait ,HasRoles;

    protected $fillable = [
        'index',
        'title',
        'link',
        'time'
    ];


}
