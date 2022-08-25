<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Support\Collection;
use Livewire\Component;

class ServiceSingle extends Component
{

    public ?object $service;
    public ?object $categories;


    public function mount( $slug )
    {
        $this->service = Service::where( 'slug' ,'=' ,$slug )
            ->with(['meta'])
            ->first();
        if( !isset( $this->service->id ) ) {
            return abort(404);
        }
        $this->categories = Category::where( 'model' ,'service' )->get();
    }


    public function render()
    {
        $meta = new Collection([]);
        $meta->put( 'all_meta'    ,$this->service->meta->pluck('value','key') );
        $meta->put( 'doing_items' ,$this->service->meta->where('key','doing_items'));

        return view('pages.service-single' ,[
            'categories'  => $this->categories ,
            'service'     => $this->service ,
            'meta'        => $meta,
        ]);
    }
}
