<?php

namespace App\Http\Livewire\Pages;

use App\Models\Catalog;
use App\Models\Standard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ResourcePage extends Component
{


    public function render()
    {
        $catalogs = Cache::tags(['catalog'])->rememberForever( 'catalogs' ,function (){
            return Catalog::all();
        });
        $standards = Cache::tags(['standard'])->rememberForever( 'standards' ,function (){
             return Standard::all();
        });

        return view('pages.resource-page' ,[
            'catalogs'  => $catalogs->sortBy('id')->take(7),
            'standards' => $standards->sortBy('id')->take(7)
        ]);
    }


}
