<?php

namespace App\Http\Livewire\Pages;

use App\Models\Option;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ExhibitionPage extends Component
{
    public function render()
    {
        $exhibition = Cache::rememberForever( 'exhibition' ,function (){
            return Option::where('key' ,'exhibition_item')->get();
        });
        return view('pages.exhibition-page',[
            'images' => $exhibition
        ]);
    }
}
