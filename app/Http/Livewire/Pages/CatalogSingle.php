<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CatalogSingle extends Component
{
    public ?object $catalog;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $this->catalog = Cache::tags(['catalog'])->rememberForever( 'catalog_'.$slug ,function() use($slug){
            return Catalog::where( 'slug' ,$slug )
                ->with(['meta','categories' ])
                ->first();
        });
        if( !isset( $this->catalog->id ) ) {
            return abort(404);
        }
        $this->categories  = Cache::tags(['cats'])->rememberForever( 'catalog_categories' ,function (){
            return Category::where( 'model' ,'catalog' )->get();
        });
        $categories  = $this->catalog->categories->modelKeys();

        $this->related = Cache::tags(['catalog'])->rememberForever( 'catalog_related_'.$slug ,function () use($categories){
            return Catalog::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories );
            })
                ->where('id', '<>', $this->catalog->id )
                ->take(7)
                ->get();
        });

        if ( !$this->related->count() ) {
            $this->related = Cache::tags(['catalog'])->rememberForever( 'blog_not_related_'.$slug ,function (){
                return Catalog::where('id', '<>', $this->catalog->id )
                    ->take(3)
                    ->get();
            });
        }
    }


    public function render()
    {
        return view('pages.catalog-single',[
            'categories' => $this->categories ,
            'catalog'    => $this->catalog ,
            'related'    => $this->related ,
            'meta'       => $this->catalog->meta->pluck('value','key'),
        ]);
    }


}
