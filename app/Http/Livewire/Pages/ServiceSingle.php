<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ServiceSingle extends Component
{

    public ?object $service;
    public ?object $categories;


    public function mount( $slug )
    {
        $this->service = Cache::tags(['service'])->rememberForever( 'service_'.$slug ,function () use($slug){
            return Service::where( 'slug' ,$slug )->with(['meta'])->first();
        });
        if( !isset( $this->service->id ) ) {
            return abort(404);
        }

        $this->categories = Cache::tags(['cats'])->rememberForever( 'service_categories' ,function (){
            return Category::where( 'model' ,'service' )->get();
        });
    }


    public function render()
    {
        return view('pages.service-single' ,[
            'categories'  => $this->categories ,
            'service'     => $this->service ,
            'meta_desc'   => $this->service->meta->pluck('value','key')->toArray(),
            'meta_doing'  => $this->service->meta->where('key','doing_items')->pluck('value','key')->toArray(),
        ]);
    }
}
