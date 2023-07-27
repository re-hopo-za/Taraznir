<?php

namespace Modules\Misc\Models;

use App\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Option extends Model  implements HasMedia
{
    use HelperTrait ,InteractsWithMedia;

    protected $fillable = [
        'title',
        'key',
        'value',
        'type'
    ];

    protected function value():Attribute
    {
        return Attribute::make(
            get: fn( $value ) => $value ,
            set: fn( $value ) => self::clearingHtml($value ,$this->type )
        );
    }

    public function meta(): MorphMany
    {
        return $this->morphMany('Modules\Misc\Models\Meta', 'metaable');
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

        $this
            ->addMediaConversion('attachments')
            ->nonQueued()
            ->keepOriginalImageFormat()
            ->withResponsiveImages();
    }



    public function attachment() :mixed
    {
        $images = $this->getMedia( 'attachments' );
        if ($images->count() == 1) {
            return $images[0]->getUrl( 'attachments');
        }elseif ($images->count() > 1){
            return $images;
        }
        return '';
    }





}
