<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Standard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class StandardSingle extends Component
{
    public ?object $standard;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $this->standard = Cache::tags(['standard'])->rememberForever( 'standard_'.$slug ,function ($slug){
            return Standard::where( 'slug' ,'=' ,$slug )->with(['meta'])->first();
        });
        if( !isset( $this->standard->id ) ) {
            return abort(404);
        }

        $this->categories = Cache::tags(['cats'])->rememberForever( 'standard_categories' ,function (){
            return Category::where( 'model' ,'standard' )->get();
        });

        $categories  = $this->standard->categories->modelKeys();
        $this->related = Cache::tags(['standard'])->rememberForever( 'standard_related_'.$slug ,function () use($categories){
            return Standard::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories );
            })->where('id', '<>', $this->standard->id )->take(7)->get();
        });

        if ( !$this->related->count() ) {
            $this->related = Cache::tags(['standard'])->rememberForever( 'standard_not_related_'.$slug ,function ($slug){
                return Standard::where('id', '<>', $this->standard->id )->take(3)->get();
            });
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
