<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class BottomLinks extends Component
{
    public function render()
    {
        $menu = redisHandler('options:footer_menu' ,function (){
            return FilamentNavigation::get('bottom-menu');
        });
        return view('layouts.bottom-links' ,[
            'menu' => $menu
        ]);
    }

}
