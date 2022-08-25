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

class Catalog extends Model implements HasMedia
{
    use HasFactory ,SoftDeletes ,InteractsWithMedia ;

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

        $this->addMediaConversion('thumbnail');

        $this
            ->addMediaConversion('images')
            ->fit(Manipulations::FIT_CONTAIN, 500, 500)
            ->nonQueued()
            ->withResponsiveImages();

        $this
            ->addMediaConversion('recent')
            ->fit(Manipulations::FIT_CONTAIN, 50, 50)
            ->nonQueued();
    }



    public function images( $conversion ='images' )
    {
        $images = $this->getMedia( $conversion );
        if ( !empty( $images ) && $conversion == 'thumbnail' && isset( $images[0]) ) {
            return $images[0]->getUrl( 'thumbnail');
        }elseif ( !empty( $images ) && $conversion == 'images' ) {
            return $images;
        }
        return asset( 'images/placeholders/product.png' );
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
