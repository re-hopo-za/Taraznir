<?php

namespace App\Http\Livewire\Pages;

use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Standard;
use App\Models\Testimonial;
use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {
        $sliders   = Slider::all();
        $standards = Standard::where('status' ,1 )
            ->with(['categories'])
            ->take(6)
            ->orderBy('chosen', 'asc')
            ->get();
        $projects  = Project::where('status' ,1 )
            ->with(['categories'])
            ->take(6)
            ->orderBy('chosen', 'asc')
            ->get();
        $products  = Product::where('status' ,1 )
            ->with(['categories','meta'])
            ->take(6)
            ->orderBy('chosen', 'asc')
            ->get();
        $brands      = Brand::all();
        $testimonial = Testimonial::all();

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
