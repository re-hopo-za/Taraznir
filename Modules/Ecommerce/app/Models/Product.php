<?php

namespace Modules\Ecommerce\app\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class Product extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait ,HasRoles;

    protected $appends = ['images'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'status',
        'chosen',
    ];


    /**
     * Get the name of the index associated with the model.
     */
    public function searchableAs(): string
    {
        return 'first';
    }


    public function toSearchableArray(): array
    {
        return [
            'title'      => $this->title,
            'summary'    => $this->summary,
            'content'    => strip_tags($this->content),
        ];
    }
}
