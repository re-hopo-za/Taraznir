<?php

namespace Modules\Service\app\Livewire;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Service\app\Models\Service;

class ServiceDetail extends Component
{
    public ?object $item;
    public function mount( $slug )
    {
        $en_slug    = Str::slug( $slug );
        $this->item = (object) redis_handler( 'services:'.$en_slug ,function () use($slug){
            return Service::with(['category' ,'meta' ,'media'])
                    ->where( 'slug' ,$slug )
                    ->activeScope()
                    ->first();
        });

        if( !$this->item )
            return abort(404);

    }


    #[Layout('theme::layout.app')]
    public function render(): View
    {
        return view('service::service-detail' ,[
            'seo'  => main_pages_seo(),
            'item' => $this->item,
        ]);
    }
}
