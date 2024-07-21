<?php

namespace Modules\Theme\app\Livewire\Layout;

use Illuminate\View\View;
use Livewire\Component;
use Modules\Core\app\Models\Option;
use RyanChandler\FilamentNavigation\Models\Navigation;

class Sidebar extends Component
{


    public function render(): View
    {
        $menus =(object) redis_handler( 'theme:footers_menu' ,function (){
            return [
                'bottom_menu'        => Navigation::fromHandle('bottom-menu'),
                'footer_first_menu'  => Navigation::fromHandle('footer-first-menu'),
                'footer_second_menu' => Navigation::fromHandle('footer-second-menu'),
            ];
        });

        $options = redis_handler( 'theme:options' ,function (){
            return
                Option::where('key' ,'theme_options')
                    ->with(['meta' ,'media'])
                    ->first();
        });

        return view('theme::layout/sidebar',[
            'menus'   => $menus,
            'options' => $options,
        ]);
    }
}
