<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class BottomLinks extends Component
{
    public $menu;
    public function mount(){
        $this->menu = FilamentNavigation::get('bottom-menu');
    }


    public function render()
    {
        return view('layouts.bottom-links' ,[
            'menu' => $this->menu
        ]);
    }

}
