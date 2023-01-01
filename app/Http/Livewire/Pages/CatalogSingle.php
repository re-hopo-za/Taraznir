<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Livewire\Component;

class CatalogSingle extends Component
{
    public ?object $catalog;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $en_slug = Str::slug( $slug );

        $this->catalog = redisHandler('catalog_'.$en_slug ,function () use($slug) {
            return Catalog::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        });
        if( !isset( $this->catalog->id ) ) {
            return abort(404);
        }
        $all_catalogs = redisHandler( 'catalogs' ,function (){
            return Catalog::with(['meta','categories'])->get();
        });
        $this->categories = redisHandler( 'catalogs_categories' ,function (){
            return Category::where( 'model' ,'catalog' )->get();
        });


        $categories  = $this->catalog->categories->modelKeys();
        $this->related = redisHandler( 'catalogs_related_'.$en_slug ,function () use($all_catalogs ,$categories){
            return $all_catalogs
                ->filter( fn( $item ) => $item->whereIn('categories.id' ,$categories) )
                ->where('id', '<>', $this->catalog->id )->take(3);
        });


        if ( !$this->related->count() ) {
            $this->related = redisHandler( 'catalogs_not_related_'.$en_slug ,function () use($all_catalogs) {
                return $all_catalogs::where('id', '<>', $this->catalog->id )->take(3)->get();
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
