<?php

namespace App\Trait;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Modules\Misc\Helpers\MiscHelper;
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

    public function meta(): MorphMany
    {
        return $this->morphMany('Modules\Misc\Models\Meta' ,'metaable');
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions( Media $media = null): void
    {
        $this
            ->addMediaConversion('preview');

        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP, 850, 550);

        $this->addMediaConversion('recent')
            ->fit(Manipulations::FIT_CROP, 75, 50);
    }


    public function images( $conversion = 'cover' ): string
    {
        $images = $this->getMedia( );
        if ( isset( $images[0] ) && !empty( $images[0]->getUrl( $conversion ) ) ){
            return $images[0]->getUrl( $conversion );
        }
        return asset( 'images/placeholders.png' );
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
