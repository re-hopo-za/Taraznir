<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Livewire\Component;

class ProductSingle extends Component
{

    public ?object $product;
    public ?object $categories;
    public ?object $tags;
    public ?object $previous;
    public ?object $next;
    public ?object $recent;


    public function mount( $slug )
    {
        $this->product = Product::where( 'slug' ,'=' ,$slug )
            ->with(['comments' ,'meta'])
            ->first();
        if( !isset( $this->product->id ) ) {
            return abort(404);
        }

        $this->categories = Category::where( 'model' ,'product' )->get();

        $this->previous   = Product::where(
            'id' ,'<' ,$this->product->id
        )->orderBy('id', 'desc')
        ->first();

        $this->next   = Product::where(
            'id' ,'>' ,$this->product->id
        )->orderBy('id', 'asc')
        ->first();

        $this->recent  = Product::orderBy('id','desc')->take(3)->get();
    }


    public function render()
    {
        return view('pages.product-single' ,[
            'categories' => $this->categories ,
            'product'    => $this->product ,
            'previous'   => $this->previous ,
            'next'       => $this->next,
            'recent'     => $this->recent ,
            'meta'       => $this->product->meta->pluck('value','key'),
            'comments'   => $this->product->comments ,
        ]);
    }
}
