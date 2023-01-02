<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductPage extends Component
{
    public string  $category;
    public ?object $products;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories  = redisHandler( 'categories:products' ,function (){
            return Category::where( 'model' ,'product' )->get();
        });
        $this->category = $category;

        $all_products = redisHandler( 'products:' ,function (){
            return Product::with(['categories' ,'meta'])->get();
        });

        if( !empty( $category ) ){
            $this->products = redisHandler( 'products:specific_category_'.$category ,function(){
                return Product::whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })->get();
            });
        }else {
            $this->products = $all_products;
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
