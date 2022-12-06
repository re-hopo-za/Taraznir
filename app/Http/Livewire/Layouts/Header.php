<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class Header extends Component
{

    public function render()
    {
        $menu = Cache::tags(['menu'])->rememberForever('header_menu' ,function (){
            return FilamentNavigation::get('main-menu');
        });
        return view('layouts.header' ,[
            'menu' => $menu
        ]);
    }
}
