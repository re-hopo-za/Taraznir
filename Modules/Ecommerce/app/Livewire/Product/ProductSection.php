<?php

namespace Modules\Ecommerce\app\Livewire\Product;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Lunar\Models\Product;

class ProductSection extends Component
{

    public function render(): View
    {
        $items =(object) redis_handler('blog:section' ,function (){
            return
                Product::with(['media'])
                    ->limit(config('product.section_limit' ,8))
                    ->get();
        });

        return view('ecommerce::product.product-section',[
            'items' => $items
        ]);
    }
}
