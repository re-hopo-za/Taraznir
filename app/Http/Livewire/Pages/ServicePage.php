<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
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
        $this->categories = Cache::tags(['cats'])->rememberForever( 'services_categories' ,function (){
            return Category::where( 'model' ,'service' )->get();
        });
        $this->category = $category;

        if( !empty( $category ) ){
            $this->services = Cache::tags(['service'])->rememberForever( 'services_specific_category' ,function (){
                return Service::with(['categories'])->whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })
                    ->get();
            });
        }else {
            $this->services = Cache::tags(['service'])->rememberForever( 'services' ,function (){
                return Service::all();
            });
        }
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
