<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover',
        'model',
    ];

    protected function slug():Attribute
    {
        return Attribute::make(
            get: fn( $value ) =>  $value ,
            set: fn( $value ) => slugRectifier( $value )
        );
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'categorizable');
    }
}
