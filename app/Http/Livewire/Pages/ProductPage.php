<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ProductPage extends Component
{
    public string  $category;
    public ?object $products;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories  = Cache::rememberForever( 'products_categories' ,function (){
            return Category::where( 'model' ,'product' )->get();
        });
        $this->category   = $category;

        if( !empty( $category ) ){
            $this->products = Cache::rememberForever( 'products_specific_category' ,function (){
                return Product::with(['categories'])->whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })->get();
            });
        }else {
            $this->products = Cache::rememberForever( 'products' ,function (){
                return Product::with(['categories','meta'])->get();
            });
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
