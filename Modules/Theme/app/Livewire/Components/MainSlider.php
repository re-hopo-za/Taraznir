<?php

namespace Modules\Theme\app\Livewire\Components;

use Livewire\Component;
use Modules\Core\app\Models\Option;

class MainSlider extends Component
{
    public function render()
    {
        $items = redis_handler( 'theme:slider' ,function (){
            return
                Option::with(['category' ,'meta' ,'media'])
                    ->whereHas('category' ,function ($query){
                        $query->where('slug' ,'main-slider');
                    })->get();
        });

        return view('theme::components.main-slider',[
            'items' => $items
        ]);
    }
}
