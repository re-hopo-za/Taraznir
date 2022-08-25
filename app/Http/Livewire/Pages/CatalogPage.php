<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class CatalogPage extends Component
{

    public string  $category;
    public ?object $catalog;
    public ?object $categories;



    public function mount( $category = '' ,$tag ='' )
    {
        $this->categories = Category::where( 'model' ,'catalog' )->get();
        $this->category   = $category;

        if( !empty( $category ) ){
            $this->catalog = Catalog::with(['categories'])
                ->whereHas('categories' ,function ($query) use ($category) {
                    $query->where('slug' ,$category);
                })
                ->get();
        }else {
            $this->catalog = Catalog::all();
        }
    }

    public function render()
    {
        return view('pages.catalog-page'  ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'catalogs'   => $this->catalog ,
        ]);
    }

}
