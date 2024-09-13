<?php

namespace Modules\Core\app\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Lunar\Models\Product;
use Modules\Blog\app\Models\Blog;
use Modules\Core\app\Traits\CommonModelMethodsTrait;
use Modules\Core\app\Traits\CommonScopesTrait;
use Modules\Project\app\Models\Project;
use Modules\Standard\app\Models\Standard;
use Modules\Tutorial\app\Models\Tutorial;
use Spatie\MediaLibrary\HasMedia;

class Category extends Model implements HasMedia
{
    use CommonScopesTrait ,CommonModelMethodsTrait;

    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'description',
        'icon',
        'model',
    ];

    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value ,
            set: fn( $value ) =>  slug_rectifier( $value )
        );
    }

    public function standard(): MorphToMany
    {
        return $this->morphedByMany(Standard::class ,'categorizable');
    }


    public function project(): MorphToMany
    {
        return $this->morphedByMany(Project::class ,'categorizable');
    }


    public function blog(): MorphToMany
    {
        return $this->morphedByMany(Blog::class ,'categorizable');
    }


    public function product(): MorphToMany
    {
        return $this->morphedByMany(Product::class ,'categorizable');
    }


    public function tutorial(): MorphToMany
    {
        return $this->morphedByMany(Tutorial::class, 'categorizable');
    }

    public function childrenCategories(): HasMany
    {
        return $this->hasMany(Category::class ,'parent_id' ,'id')->with('categories');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class ,'parent_id' ,'id');
    }
}
