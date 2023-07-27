<?php

namespace Modules\Blog\Models;

use App\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model
{
    use HasFactory ,SoftDeletes ,InteractsWithMedia ,HelperTrait;


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
            set: fn( $value ) => self::slugRectifier( $value )
        );
    }

    public function scopeActive($query)
    {
        return $query->where('status' ,'publish');
    }

    public function scopeSort( $query )
    {
        return $query->orderBy('chosen' ,'desc');
    }

    public function meta(): MorphMany
    {
        return $this->morphMany('App\Models\Meta', 'metaable');
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

}
