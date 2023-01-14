<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

class Blog extends Model implements HasMedia
{
    use HasFactory ,SoftDeletes ,InteractsWithMedia;


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

    protected array $searchable = [
        'title',
        'summary',
        'content',
    ];


    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value ,
            set: fn( $value ) => slugRectifier( $value )
        );
    }


    public function meta(): MorphMany
    {
        return $this->morphMany('App\Models\Meta', 'metaable');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
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
            ->addMediaConversion('preview');

        $this
            ->addMediaConversion('cover')
            ->fit(Manipulations::FIT_CROP, 750, 500);

        $this->addMediaConversion('recent')
            ->fit(Manipulations::FIT_CONTAIN, 75, 50);
    }



    public function images( $conversion = 'cover' ): string
    {
        $images = $this->getMedia( );
        if ( isset( $images[0] ) && !empty( $images[0]->getUrl( $conversion ) ) ){
            return $images[0]->getUrl( $conversion );
        }
        return asset( 'images/placeholders.png' );
    }




}
