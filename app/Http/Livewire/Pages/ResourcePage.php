<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Standard;
use Livewire\Component;

class ResourcePage extends Component
{


    public function render()
    {
        $catalogs = redisHandler( 'catalog:' ,function (){
            return Catalog::with(['categories' ,'meta'])->get();
        });
        $standards = redisHandler( 'standard:' ,function (){
             return Standard::with(['categories' ,'meta'])->get();
        });

        return view('pages.resource-page' ,[
            'catalogs'  => $catalogs->sortBy('id')->take(7),
            'standards' => $standards->sortBy('id')->take(7)
        ]);
    }


}
