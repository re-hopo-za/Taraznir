<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class PostNavigator extends Component
{
    public ?object $previous;
    public ?object $next;
    public ?string $singleRoute;
    public ?string $route;

    public function mount( $previous ,$next ,$singleRoute ,$route  )
    {
        $this->previous    = $previous;
        $this->next        = $next;
        $this->singleRoute = $singleRoute;
        $this->route       = $route;
    }

    public function render()
    {
        return view('components.post-navigator' ,[
            'previous'    => $this->previous ,
            'next'        => $this->next ,
            'singleRoute' => $this->singleRoute ,
            'route'       => $this->route ,
        ]);
    }

}
