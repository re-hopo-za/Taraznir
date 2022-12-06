<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Categories extends Component
{

    public ?object $categories;
    public string $allRoute;
    public string $route;
    public string $specificCat;
    public function mount( $categories ,$allRoute ,$route ,$specificCat )
    {
        $this->categories  = $categories;
        $this->allRoute    = $allRoute;
        $this->route       = $route;
        $this->specificCat = $specificCat;
    }

    public function render()
    {
        return view('components.categories' ,[
            'categories'  => $this->categories ,
            'allRoute'    => $this->allRoute ,
            'route'       => $this->route ,
            'specificCat' => $this->specificCat ,
        ]);
    }
}
