<?php

namespace App\Http\Livewire\Pages;

use App\Models\Option;
use App\Models\Product;
use App\Models\Project;
use App\Models\Standard;
use Livewire\Component;

class HomePage extends Component
{

    public function render()
    {

        $sliders = redisHandler( 'sliding_item' ,function (){
            return Option::where('key' ,'sliding_item')->get();
        });

        $standards = redisHandler( 'standards:' ,function (){
            return Standard::with(['categories'])->get();
        });
        $standards = $standards->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $projects = redisHandler( 'projects:' ,function (){
            return Project::with(['categories'])->get();
        });
        $projects  = $projects->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $products = redisHandler( 'products:' ,function (){
            return Product::with(['categories','meta'])->get();
        });
        $products  = $products->where('status' ,'publish' )->sortByDesc('chosen')->take(6);

        $brands = redisHandler( 'brands_item' ,function (){
            return Option::where('key' ,'brands_item')->get();
        });

        $testimonial = redisHandler( 'testimonials_item' ,function (){
            return Option::where('key' ,'testimonials_item')->get();
        });

        $seo = redisHandler( 'home_page_seo' ,function (){
            return Option::where('key' ,'home_page_seo')->first();
        });


        return view('pages.home-page',[
            'sliders'      => $sliders ,
            'standards'    => $standards ,
            'projects'     => $projects ,
            'products'     => $products ,
            'brands'       => $brands ,
            'testimonials' => $testimonial ,
            'seo'          => $seo ,
        ]);
    }
}
