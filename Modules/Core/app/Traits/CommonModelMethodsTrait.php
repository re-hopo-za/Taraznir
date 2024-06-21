<?php

namespace Modules\Core\app\Traits;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\app\Models\Category;
use Modules\Core\app\Models\Comment;
use Modules\User\app\Models\User;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\app\Models\Media;
use Spatie\Permission\Traits\HasRoles;


trait CommonModelMethodsTrait {

    use HasFactory ,SoftDeletes ,HasRoles ,InteractsWithMedia;

    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value,
            set: fn( $value ) => slug_rectifier( $value )
        );
    }


    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class ,'commentable')
            ->whereRaw('parent_id = 0 OR parent_id IS NULL');
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

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions( Media $media = null): void
    {
        $this
            ->addMediaConversion('thumbnail')
            ->fit(Manipulations::FIT_CROP, 140, 105);

        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP, 420, 315);

        $this
            ->addMediaConversion('single')
            ->fit(Manipulations::FIT_CROP, 1260, 945);
    }


    protected function getImagesAttribute(): array
    {
        $media = $this->getMedia('index')->first();
        if($media){
            return [
                'thumbnail' => $media->getUrl('thumbnail'),
                'cover'     => $media->getUrl('cover'),
                'single'    => $media->getUrl('single'),
            ];
        }
        return [];
    }

}
