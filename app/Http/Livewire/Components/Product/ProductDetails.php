<?php

namespace App\Http\Livewire\Components\Product;

use Livewire\Component;

class ProductDetails extends Component
{
    public ?object $product;
    public ?object $comments;
    public mixed $meta;

    public function mount( $product ,$comments ,$meta )
    {
        $this->product  = $product;
        $this->comments = $comments;
        $this->meta     = $meta;
    }

    public function render()
    {
        return view('components.product.product-details' ,[
            'product'  => $this->product ,
            'comments' => $this->comments ,
            'meta'     => $this->meta ,
        ]);
    }
}
