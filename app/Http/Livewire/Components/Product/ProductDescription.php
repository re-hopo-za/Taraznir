<?php

namespace App\Http\Livewire\Components\Product;

use Livewire\Component;

class ProductDescription extends Component
{

    public ?object $product;

    public function mount( $product )
    {
        $this->product  = $product;
    }

    public function render()
    {
        return view('components.product.product-description' ,[
            'product'  => $this->product
        ]);
    }
}
