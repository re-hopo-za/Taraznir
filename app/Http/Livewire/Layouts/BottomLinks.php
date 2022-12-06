<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class BottomLinks extends Component
{
    public function render()
    {
        $menu = Cache::tags(['menu'])->rememberForever('footer_menu' ,function (){
            return FilamentNavigation::get('bottom-menu');
        });
        return view('layouts.bottom-links' ,[
            'menu' => $menu
        ]);
    }

}
