<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

class Service extends Model implements HasMedia
{
    use HasFactory ,SoftDeletes ,InteractsWithMedia ;

    protected $fillable = [
        'title',
        'slug',
        'cover',
        'summary',
        'chosen'

    ];

    public function setSlugAttribute( $value )
    {
        $this->attributes['slug'] = slugRectifier( $value );
    }


    public function meta(): MorphMany
    {
        return $this->morphMany('App\Models\Meta', 'metaable');
    }

    public function seo(): MorphMany
    {
        return $this->morphMany('App\Models\Seo', 'seoable');
    }


    public function categories(): MorphToMany
    {
        return $this->morphToMany('App\Models\Category', 'categorizable' );
    }



    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions( Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();

        $this->addMediaConversion('thumbnail')
            ->fit(Manipulations::FIT_CONTAIN, 350, 220);

        $this->addMediaConversion('recent')
            ->fit(Manipulations::FIT_CONTAIN, 100, 100);

        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CONTAIN, 1365, 853 )
            ->nonQueued()
            ->withResponsiveImages();
    }



    public function images( $conversion = 'cover' ):mixed
    {
        $images = $this->getMedia();
        if ( isset( $images[0] ) && !empty( $images[0]->getUrl( $conversion ) ) ){
            return $images[0]->getUrl( $conversion );
        }
        return asset( 'images/placeholders.png' );
    }



    public function attachments(): object
    {
        $attachments = $this->getMedia( 'attachments' );
        if ( !empty( $attachments ) ) {
            return $attachments;
        }
        return (object) [];
    }




}
