<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
//use App\Models\Category;
use Livewire\Component;

class CatalogPage extends Component
{

//    public string  $category;
    public ?object $catalogs;
//    public ?object $categories;



    public function mount( $category = '' )
    {
//        $this->category = $category;

//        if( !empty( $category ) ){
//            $this->catalogs = redisHandler('catalogs:specific_category_'.$category ,function(){
//                return Catalog::whereHas('categories' ,function ($query) {
//                    $query->where('slug' ,$this->category );
//                })->get();
//            });
//            if( empty($this->catalogs) ) {
//                return abort(404);
//            }
//        }else {
            $all_catalogs = redisHandler( 'catalogs:' ,function (){
                return Catalog::with(['meta','categories'])->get();
            });
            $this->catalogs  = $all_catalogs;
//        }

//        $this->categories  = redisHandler( 'categories:catalogs' ,function (){
//            return Category::where( 'model' ,'catalog' )->get();
//        });
    }

    public function render()
    {
        return view('pages.catalog-page' ,[
//            'categories' => $this->categories ,
//            'category'   => $this->category ,
            'catalogs'   => $this->catalogs ,
        ]);
    }

}
