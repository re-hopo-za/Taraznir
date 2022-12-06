<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CatalogPage extends Component
{

    public string  $category;
    public ?object $catalogs;
    public ?object $categories;



    public function mount( $category = '' ,$tag ='' )
    {
        $this->categories  = Cache::tags(['cats'])->rememberForever( 'catalogs_categories' ,function (){
            return Category::where( 'model' ,'catalog' )->get();
        });
        $this->category   = $category;

        if( !empty( $category ) ){
            $this->catalogs  = Cache::tags(['catalog'])->rememberForever( 'catalogs_specific_category' ,function (){
                return Catalog::with(['categories'])
                    ->whereHas('categories' ,function ($query) {
                        $query->where('slug' ,$this->category );
                    })
                    ->get();
            });
        }else {
            $this->catalogs  = Cache::tags(['catalog'])->rememberForever( 'catalogs' ,function (){
                return Catalog::all();
            });
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
