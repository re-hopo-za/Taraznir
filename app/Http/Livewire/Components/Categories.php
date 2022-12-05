<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Categories extends Component
{

    public ?object $categories;
    public string $route;
    public function mount( $categories ,$route )
    {
        $this->categories = $categories;
        $this->route      = $route;
    }

    public function render()
    {
        return view('components.categories' ,[
            'categories' => $this->categories ,
            'route'      => $this->route
        ]);
    }
}
