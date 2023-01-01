<?php

namespace App\Http\Livewire\Pages;


use App\Models\Category;
use App\Models\Standard;
use Illuminate\Support\Str;
use Livewire\Component;

class StandardSingle extends Component
{
    public ?object $standard;
    public ?object $categories;
    public ?object $related;

    public function mount( $slug )
    {
        $en_slug = Str::slug( $slug );

        $this->standard = redisHandler('standard_'.$en_slug ,function () use($slug) {
            return Standard::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        });
        if( !isset( $this->standard->id ) ) {
            return abort(404);
        }

        $this->categories = redisHandler( 'standards_categories' ,function (){
            return Category::where( 'model' ,'standard' )->get();
        });
        $standards = redisHandler( 'standards' ,function (){
            return Standard::with(['meta','categories'])->get();
        });

        $categories  = $this->standard->categories->modelKeys();
        $this->related = redisHandler( 'standards_related_'.$en_slug ,function () use($standards ,$categories){
            return $standards
                ->filter( fn( $item ) => $item->whereIn('categories.id' ,$categories) )
                ->where('id', '<>', $this->standard->id )->take(3);
        });

        if ( !$this->related->count() ){
            $this->related = redisHandler( 'standards_not_related_'.$en_slug ,function () use($standards){
                return $standards->where('id', '<>', $this->standard->id )->take(3);
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
