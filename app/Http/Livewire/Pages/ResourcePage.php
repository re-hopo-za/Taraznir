<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Option;
use App\Models\Standard;
use Livewire\Component;

class ResourcePage extends Component
{


    public function render()
    {
        $catalogs = redisHandler( 'catalogs:' ,function (){
            return Catalog::with(['categories' ,'meta'])->get();
        });
        $standards = redisHandler( 'standards:' ,function (){
             return Standard::with(['categories' ,'meta'])->get();
        });

        $seo = redisHandler( 'project_page_seo' ,function (){
            return Option::where('key' ,'project_page_seo')->first();
        });
        return view('pages.resource-page' ,[
            'catalogs'  => $catalogs->sortBy('id')->take(7),
            'standards' => $standards->sortBy('id')->take(7),
            'seo'       => $seo
        ]);
    }


}
