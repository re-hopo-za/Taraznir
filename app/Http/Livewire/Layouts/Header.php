<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class Header extends Component
{
    public $menu;
    public function mount()
    {
        $this->menu = FilamentNavigation::get('main-menu');
    }

    public function render()
    {
        return view('layouts.header' ,[
            'menu' => $this->menu
        ]);
    }
}
