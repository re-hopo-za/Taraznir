<?php

namespace Modules\Tutorial\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Tutorial\Database\factories\TutorialFactory::new();
    }
}
