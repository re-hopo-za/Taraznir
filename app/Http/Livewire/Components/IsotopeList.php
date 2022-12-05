<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class IsotopeList extends Component
{
    public ?object $posts;
    public ?string $category;
    public ?object $categories;
    public string $route;

    public function mount( $posts ,$category ,$categories ,$route )
    {
        $this->posts      = $posts;
        $this->category   = $category;
        $this->categories = $categories;
        $this->route      = $route;
    }

    public function render()
    {
        return view('components.isotope-list' ,[
            'posts'       => $this->posts ,
            'category'    => $this->category ,
            'categories'  => $this->categories ,
            'route'       => $this->route ,
        ]);
    }

}
