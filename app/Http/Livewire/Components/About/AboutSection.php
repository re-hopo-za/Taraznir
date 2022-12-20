<?php

namespace App\Http\Livewire\Components\About;

use App\Models\Option;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class AboutSection extends Component
{
    public function render()
    {
//        $welcome = Cache::tags(['welcome'])->rememberForever( 'welcome' ,function (){
//            return Option::where('key' ,'welcome_background')->first();
//        });
        $welcome = Cache::rememberForever( 'welcome' ,function (){
            return Option::where('key' ,'welcome_background')->first();
        });
        return view('components.about.about-section',[
            'welcome' => $welcome?->attachment()
        ]);
    }
}
