<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
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



        $this->product = Product::where( 'slug' ,$slug )->with(['meta','categories' ])->first();
        if( !isset( $this->product->id ) ) {
            return abort(404);
        }

        $this->categories  = Cache::rememberForever( 'products_categories' ,function (){
            return Category::where( 'model' ,'product' )->get();
        });

        $this->previous  = Cache::rememberForever( 'product_previous_'.$this->product->id  ,function (){
            return Product::where('id' ,'<' ,$this->product->id )->orderBy('id', 'desc')->first();
        });

        $this->next  = Cache::rememberForever( 'product_next_'.$this->product->id ,function (){
            return Product::where('id' ,'>' ,$this->product->id )->orderBy('id', 'desc')->first();
        });

        $this->recent  = Cache::rememberForever( 'product_recent' ,function (){
            return Product::orderBy('id','desc')->take(3)->get();
        });

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
