<?php

namespace App\Http\Livewire\Components\Product;

use Livewire\Component;

class ProductImages extends Component
{

    public ?object $product;

    public function mount( $product  )
    {
        $this->product  = $product;
    }


    public function render()
    {
        return view('components.product.product-images' ,[
            'product'  => $this->product ,
        ]);
    }
}
