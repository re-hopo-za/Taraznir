<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class RelatedPosts extends Component
{
    public ?string $title;
    public ?string $path;
    public ?object $posts;
    public function mount( $posts ,$path ,$title )
    {
        $this->posts = $posts;
        $this->path  = $path;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.related-posts' ,[
            'posts' => $this->posts ,
            'path'  => $this->path  ,
            'title' => $this->title ,
        ]);
    }

}
