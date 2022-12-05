<?php

namespace App\Http\Livewire\Pages;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Standard;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {

        $sliders = Cache::rememberForever( 'sliders' ,function(){
            return Slider::all();
        });

        $standards = Cache::rememberForever( 'standards' ,function (){
            return Standard::with(['categories'])->get();
        });
        $standards = $standards->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $projects = Cache::rememberForever( 'projects' ,function (){
            return Project::with(['categories'])->get();
        });
        $projects  = $projects->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $products = Cache::rememberForever( 'products' ,function (){
            return Product::with(['categories','meta'])->get();
        });
        $products  = $products->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $brands = Cache::rememberForever( 'brands' ,function (){
            return Brand::with(['meta'])->get();
        });

        $testimonial = Cache::rememberForever( 'testimonial' ,function (){
            return Testimonial::with(['meta'])->get();
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
