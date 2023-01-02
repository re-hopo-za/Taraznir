<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use Livewire\Component;

class CatalogPage extends Component
{

    public string  $category;
    public ?object $catalogs;
    public ?object $categories;



    public function mount( $category = '' )
    {
        $this->categories  = redisHandler( 'catalogs:categories' ,function (){
            return Category::where( 'model' ,'catalog' )->get();
        });
        $this->category   = $category;

        $all_catalogs = redisHandler( 'catalogs:' ,function (){
            return Catalog::with(['meta','categories']);
        });

        if( !empty( $category ) ){
            $this->catalogs = redisHandler('catalogs:specific_category_'.$category ,function(){
                return Catalog::whereHas('categories' ,function ($query) {
                        $query->where('slug' ,$this->category );
                    })->get();
            });
        }else {
            $this->catalogs  = $all_catalogs;
        }
    }

    public function render()
    {
        return view('pages.catalog-page'  ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'catalogs'   => $this->catalogs ,
        ]);
    }

}
