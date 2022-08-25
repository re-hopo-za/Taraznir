<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value',
        'seoable_id',
        'seoable_type'
    ];
    protected $table = 'seo';
    public $timestamps = false;


}
