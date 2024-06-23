<?php

namespace Modules\Gallery\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Gallery\app\Models\Gallery;

class GalleryPage extends Component
{
    public ?object $items = null;

    public function mount()
    {
        $this->items = redis_handler('galleries' ,function (){
            return Gallery::with(['media'])->get();
        });
    }


    #[Layout('theme::layout.app')]
    public function render():View
    {
        return view('gallery::gallery-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
