<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class RecentPosts extends Component
{


    public $posts;
    public $title;

    public function mount( $posts ,$title )
    {
        $this->posts = $posts;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.recent-posts' ,[
            'posts' => $this->posts ,
            'title' => $this->title
        ]);
    }

}
