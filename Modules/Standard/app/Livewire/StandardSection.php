<?php

namespace Modules\Standard\app\Livewire;

use Livewire\Component;
use Modules\Standard\app\Models\Standard;

class StandardSection extends Component
{

    public function render()
    {
        $items = redis_handler('standard:section' ,function (){
            return
                Standard::with(['category' ,'meta' ,'media'])
                    ->activeScope()
                    ->orderBy('chosen' ,'DESC')
                    ->limit(config('service::section_limit' ,12))
                    ->get();
        });

        return view('standard::standard-section',[
            'items' => $items
        ]);
    }
}
