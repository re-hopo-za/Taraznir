<?php

namespace Modules\Theme\app\Livewire\Layout;

use Illuminate\View\View;
use Livewire\Component;
use Modules\Core\app\Models\Option;
use Modules\Tutorial\app\Models\Tutorial;
use RyanChandler\FilamentNavigation\Models\Navigation;

class Footer extends Component
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

        $tutorials = redis_handler( 'theme:footer_tutorials' ,function (){
            return
                Tutorial::with(['meta' ,'media' ,'category'])
                    ->activeScope()
                    ->orderBy('chosen' ,'DESC')
                    ->limit(3)
                    ->get();
        });

        return view('theme::layout/footer',[
            'menus'     => $menus,
            'options'   => $options,
            'tutorials' => $tutorials,
        ]);
    }
}
