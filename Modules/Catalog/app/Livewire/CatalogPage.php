<?php

namespace Modules\Catalog\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Catalog\app\Models\Catalog;
use Modules\Core\app\Models\Category;

class CatalogPage extends Component
{
    public $categories ,$items;


    public function mount(): void
    {
        $this->items      = redis_handler( "catalogs" ,function (){
            return Catalog::with(['category'])->get();
        });
        $this->categories = redis_handler( "catalog:categories" ,function (){
            return Category::with('catalog')->where('model' ,'catalog')->get();
        });
    }

    #[Layout('theme::layout.app')]
    public function render(): View
    {
        return view('catalog::catalog-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
