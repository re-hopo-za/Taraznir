<?php

namespace Modules\Standard\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Models\Category;
use Modules\Standard\app\Models\Standard;

class StandardPage extends Component
{
    public $categories ,$items;


    public function mount(): void
    {
        $this->items      = redis_handler( "standards" ,function (){
            return Standard::with(['category'])->get();
        });
        $this->categories = redis_handler( "standard:categories" ,function (){
            return Category::with('standard')->where('model' ,'standard')->get();
        });
    }

    #[Layout('theme::layout.app')]
    public function render(): View
    {
        $this->dispatch('init-mixitup');
        return view('standard::standard-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
