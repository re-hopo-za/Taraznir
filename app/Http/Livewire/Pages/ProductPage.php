<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Livewire\Component;

class ProductPage extends Component
{
    public string  $category;
    public ?object $products;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = Category::where( 'model' ,'product' )->get();
        $this->category   = $category;

        if( !empty( $category ) ){
            $this->products = Product::with(['categories'])
                ->whereHas('categories' ,function ($query) use ($category) {
                    $query->where('slug' ,$category);
                })
                ->get();
        }else {
            $this->products = Product::all();
        }
    }

    public function render()
    {
        return view('pages.product-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'products'   => $this->products
        ]);
    }
}
