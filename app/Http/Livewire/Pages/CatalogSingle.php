<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class CatalogSingle extends Component
{
    public ?object $catalog;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $this->catalog = Catalog::where( 'slug' ,'=' ,$slug )
            ->with(['meta','categories' ])
            ->first();
        if( !isset( $this->catalog->id ) ) {
            return abort(404);
        }

        $this->categories = Category::where( 'model' ,'catalog' )->get();

        $categories = $this->catalog->categories->modelKeys();
        $this->related = Catalog::
        whereHas('categories', function ($q) use ( $categories ) {
            $q->whereIn('categories.id', $categories );
        })
            ->where('id', '<>', $this->catalog->id )
            ->take(7)
            ->get();

        if ( !$this->related->count() ) {
            $this->related = Catalog::where('id', '<>', $this->catalog->id )
                ->take(7)
                ->get();
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
