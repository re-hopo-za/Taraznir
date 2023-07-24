<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Option;
use App\Models\Service;
use Livewire\Component;

class ServicePage extends Component
{

//    public string  $category;
    public ?object $services;
//    public ?object $categories;


    public function mount( $category = '' )
    {
//        $this->categories = redisHandler( 'categories:services' ,function (){
//            return Category::where( 'model' ,'service' )->get();
//        });
//        $this->category = $category;

        $this->services  = redisHandler( 'services:' ,function (){
            return Service::with(['categories' ,'meta'])->get();
        });

    }

    public function render()
    {
        $seo = redisHandler( 'service_page_seo' ,function (){
            return Option::where('key' ,'service_page_seo')->first();
        });

        return view('pages.service-page' ,[
//            'categories' => $this->categories ,
//            'category'   => $this->category ,
            'services'   => $this->services ,
            'seo'        => $seo ,
        ]);
    }
}
