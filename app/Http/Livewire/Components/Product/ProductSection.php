<?php

namespace App\Http\Livewire\Components\Product;

use Livewire\Component;

class ProductSection extends Component
{
    public ?object $products;

    public function mount( $products )
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('components.product.product-section',[
            'products' => $this->products
        ]);
    }
}
