<?php

namespace Modules\Catalog\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\app\Database\factories\CatalogFactory;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class Catalog extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait ,HasRoles;

    protected $appends = ['images'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'status',
        'chosen',
    ];

    protected static function newFactory(): CatalogFactory
    {
        return CatalogFactory::new();
    }

}
