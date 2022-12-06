<?php

namespace App\Http\Livewire\Pages;

use App\Models\Option;
use App\Models\Product;
use App\Models\Project;
use App\Models\Standard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {

        $sliders = Cache::tags(['slider'])->rememberForever( 'sliders' ,function(){
            return Option::where('key' ,'sliding_item')->get();
        });

        $standards = Cache::tags(['standard'])->rememberForever( 'standards' ,function (){
            return Standard::with(['categories'])->get();
        });
        $standards = $standards->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $projects = Cache::tags(['project'])->rememberForever( 'projects' ,function (){
            return Project::with(['categories'])->get();
        });
        $projects  = $projects->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $products = Cache::tags(['product'])->rememberForever( 'products' ,function (){
            return Product::with(['categories','meta'])->get();
        });
        $products  = $products->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $brands = Cache::tags(['brand'])->rememberForever( 'brands' ,function (){
            return Option::where('key' ,'brands_item')->get();
        });

        $testimonial = Cache::tags(['testimonial'])->rememberForever( 'testimonial' ,function (){
            return Option::where('key' ,'testimonials_item')->get();
        });


        return view('pages.home-page',[
            'sliders'      => $sliders ,
            'standards'    => $standards ,
            'projects'     => $projects ,
            'products'     => $products ,
            'brands'       => $brands ,
            'testimonials' => $testimonial ,
        ]);
    }
}
