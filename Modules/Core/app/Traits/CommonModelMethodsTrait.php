<?php

namespace Modules\Core\app\Traits;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Modules\Core\app\Models\Category;
use Modules\Core\app\Models\Comment;
use Modules\User\app\Models\User;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;


trait CommonModelMethodsTrait {

    use HasFactory ,SoftDeletes ,HasRoles ,InteractsWithMedia ,Searchable;

    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value,
            set: fn( $value ) => slug_rectifier( $value )
        );
    }


    public function meta(): MorphMany
    {
        return $this->morphMany('Modules\Core\app\Models\Meta','metaable');
    }


    public function category(): MorphToMany
    {
        return $this->morphToMany(Category::class ,'categorizable');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function author():BelongsTo
    {
        return $this->belongsTo(User::class ,'author_id' ,'id');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(140)
            ->height(105)
            ->nonQueued();

        $this->addMediaConversion('cover')
            ->width(420)
            ->height(315)
            ->nonQueued();

        $this->addMediaConversion('single')
            ->width(1260)
            ->height(945)
            ->nonQueued();

        $this->addMediaConversion('origin')
            ->nonQueued();
    }


    protected function getImagesAttribute(): array
    {
        $media = $this->getMedia('index')->first();
        if($media){
            return [
                'thumbnail' => $media->getUrl('thumbnail'),
                'cover'     => $media->getUrl('cover'),
                'single'    => $media->getUrl('single'),
                'origin'    => $media->getUrl('origin'),
            ];
        }
        return [];
    }

}
