<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Standard;
use App\Models\Tag;
use Livewire\Component;

class StandardSingle extends Component
{
    public ?object $standard;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $this->standard = Standard::where( 'slug' ,'=' ,$slug )
            ->with(['meta','categories' ])
            ->first();
        if( !isset( $this->standard->id ) ) {
            return abort(404);
        }

        $this->categories = Category::where( 'model' ,'standard' )->get();

        $categories = $this->standard->categories->modelKeys();
        $this->related = Standard::
        whereHas('categories', function ($q) use ( $categories ) {
            $q->whereIn('categories.id', $categories );
        })
            ->where('id', '<>', $this->standard->id )
            ->where('id', '<>', $this->standard->id )
            ->take(7)
            ->get();

        if ( !$this->related->count() ) {
            $this->related = Standard::where('id', '<>', $this->standard->id )
                ->take(7)
                ->get();
        }
    }


    public function render()
    {
        return view('pages.standard-single',[
            'categories' => $this->categories ,
            'standard'   => $this->standard ,
            'related'    => $this->related ,
            'meta'       => $this->standard->meta->pluck('value','key'),
        ]);
    }

}
