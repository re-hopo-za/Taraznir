<?php

namespace Modules\Theme\app\Livewire\Components;

use Illuminate\View\View;
use Livewire\Component;
use Modules\Core\app\Models\Comment;

class CommentList extends Component
{
    public mixed $items = null;
    public mixed $type  = null;
    public mixed $id    = null;


    public function mount($type ,$id): void
    {
        $this->type = $type;
        $this->id   = $id;
    }


    protected $listeners = [
        '$refresh'
    ];


    public function render(): View
    {
        $this->items = Comment::with(['children' ,'user'])
            ->where('parent_id' ,0)
            ->where('commentable_type' ,$this->type)
            ->where('commentable_id'   ,$this->id)
            ->get();

        return view('theme::components.comment.comment-list');
    }
}
