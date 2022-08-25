<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class RelatedPosts extends Component
{
    public ?string $title;
    public ?object $posts;
    public function mount( $posts ,$title )
    {
        $this->posts = $posts;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.related-posts' ,[
            'posts' => $this->posts ,
            'title' => $this->title ,
        ]);
    }

}
