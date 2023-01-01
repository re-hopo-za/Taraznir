<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Project;
use App\Models\Standard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ResourcePage extends Component
{


    public function render()
    {
        $catalogs = redisHandler( 'catalogs' ,function (){
            return Catalog::with(['categories' ,'meta'])->get();
        });
        $standards = redisHandler( 'standards' ,function (){
             return Standard::with(['categories' ,'meta'])->get();
        });

        return view('pages.resource-page' ,[
            'catalogs'  => $catalogs->sortBy('id')->take(7),
            'standards' => $standards->sortBy('id')->take(7)
        ]);
    }


}
