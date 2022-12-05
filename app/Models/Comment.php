<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * @property mixed $comment
 * @property mixed $user_id
 * @property mixed $parent_id
 * @property mixed $approved
 * @property mixed $commentable_id
 * @property mixed $commentable_type
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Comment extends Model
{
    use HasFactory ,SoftDeletes;
    public $appends = ['children'];

    protected $fillable = [
        'comment',
        'user_id',
        'parent_id',
        'approved',
        'created_at',
        'updated_at',
        'commentable_id',
        'commentable_type',
    ];


    public function getChildrenAttribute(): object
    {
        return $this->childrenComments( $this );
    }


    public function user()
    {
        return $this->belongsTo(User::class ,'user_id' ,'id');
    }


    function childrenComments( $comments ): object
    {
        if ( empty( $comments->parent_id ) ) {
            return DB::table('comments')->where('parent_id' ,'=' ,$comments->id )->get();
        }
        return (object)[];
    }


}
