<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class SimpleSlider extends Component
{
    public ?object $posts;
    public ?string $route;

    public function mount( $posts ,$route )
    {
        $this->posts = $posts;
        $this->route = $route;
    }


    public function render()
    {
        return view('components.simple-slider' ,[
            'posts' => $this->posts,
            'route' => $this->route
        ]);
    }
}

