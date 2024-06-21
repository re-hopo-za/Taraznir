<?php

namespace Modules\Service\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Service\app\Models\Service;

class ServicePage extends Component
{

    #[Layout('theme::layout.app')]
    public function render(): View
    {
        $items =(object) redis_handler( 'services' ,function (){
            return
                Service::with(['category' ,'meta' ,'media'])
                    ->activeScope()
                    ->orderBy('chosen' ,'DESC')
                    ->get();
        });
        return view('service::service-page' ,[
            'seo'   => main_pages_seo(),
            'items' => $items,
        ]);
    }
}
