<?php

namespace Modules\Theme\app\Livewire\Layout;

use Illuminate\View\View;
use Livewire\Component;
use Modules\Core\app\Models\Option;
use RyanChandler\FilamentNavigation\Models\Navigation;

class Header extends Component
{

    public function render(): View
    {
        $menu = redis_handler( 'headers_menu' ,function (){
            return
                Navigation::fromHandle('main-menu');
        });

        $options = redis_handler( 'theme_options' ,function (){
            return
                Option::where('key' ,'theme_options')
                ->with(['meta' ,'media'])
                ->first();
        });

        return view('theme::layout/header',[
            'menu'    => $menu,
            'options' => $options,
        ]);
    }
}
