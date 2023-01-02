<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

class Header extends Component
{

    public function render()
    {

        $menu = redisHandler('options:header_menu' ,function (){
            return FilamentNavigation::get('main-menu');
        });
        return view('layouts.header' ,[
            'menu' => $menu
        ]);
    }
}
