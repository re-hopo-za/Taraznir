<?php

namespace App\Http\Livewire\Pages;

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;

class ServiceSingle extends Component
{

    public ?object $service;
    public ?object $categories;


    public function mount( $slug )
    {
        $en_slug = Str::slug( $slug );
        $this->service = redisHandler('services:'.$en_slug ,function () use($slug) {
            return Service::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        });
        if( !isset( $this->service->id ) ) {
            return abort(404);
        }

    }


    public function render()
    {
        return view('pages.service-single' ,[
            'service'     => $this->service ,
            'meta_desc'   => $this->service->meta->pluck('value','key')->toArray(),
            'meta_doing'  => $this->service->meta->where('key','doing_items')->pluck('value','id')->toArray(),
        ]);
    }
}
