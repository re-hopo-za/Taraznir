<?php

namespace App\Trait;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Modules\Misc\Helpers\MiscHelper;
use Modules\Misc\Models\Category;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait CommonModelMethodsTrait{

    use HasFactory ,SoftDeletes ,InteractsWithMedia ,Searchable;

    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value,
            set: fn( $value ) => MiscHelper::slugRectifier( $value )
        );
    }

    protected function getJalaliCreatedAtAttribute(): int|string
    {
        return MiscHelper::numberConverter(
            MiscHelper::jalaliToGregorianAndConversely( $this->created_at ,format:'Y-m-d H:i')
        ,true );
    }


    protected function getImagesAttribute(): array
    {
        $media = $this->getMedia('*')->first();
        if($media){
            return [
                'thumbnail' => $media->getUrl('thumbnail'),
                'cover'     => $media->getUrl('cover'),
                'single'    => $media->getUrl('single'),
            ];
        }
        return [];
    }


    public function meta(): MorphMany
    {
        return $this->morphMany('Modules\Misc\Models\Meta' ,'metaable');
    }


    public function category(): MorphToMany
    {
        return $this->morphToMany(Category::class ,'categorizable' );
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





    public function toSearchableArray(): array
    {
        return [
            'title'      => $this->title,
            'summary'    => $this->summary,
            'content'    => strip_tags( $this->content ),
        ];
    }
}
