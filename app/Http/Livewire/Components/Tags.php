<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Tags extends Component
{

    public ?object $tags;
    public string $route;
    public function mount( $tags ,$route )
    {
        $this->tags  = $tags;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.tags' ,[
            'tags'  => $this->tags ,
            'route' => $this->route
        ]);
    }
}
