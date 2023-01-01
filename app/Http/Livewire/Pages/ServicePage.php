<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Standard;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ServicePage extends Component
{

    public string  $category;
    public ?object $services;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = redisHandler( 'services_categories' ,function (){
            return Category::where( 'model' ,'service' )->get();
        });

        $this->category = $category;

        $this->services  = redisHandler( 'services' ,function (){
            return Service::with(['categories' ,'meta'])->get();
        });
    }

    public function render()
    {
        return view('pages.service-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'services'   => $this->services ,
        ]);
    }
}
