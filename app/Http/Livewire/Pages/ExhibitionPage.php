<?php

namespace App\Http\Livewire\Pages;

use App\Models\Option;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ExhibitionPage extends Component
{
    public function render()
    {
        $exhibition = redisHandler( 'exhibition_item' ,function (){
            return Option::where('key' ,'exhibition_item')->get();
        });

        $seo = redisHandler( 'exhibition_page_seo' ,function (){
            return Option::where('key' ,'exhibition_page_seo')->first();
        });

        return view('pages.exhibition-page',[
            'images' => $exhibition,
            'seo'    => $seo
        ]);
    }
}
