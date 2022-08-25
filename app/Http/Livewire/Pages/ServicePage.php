<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Tag;
use Livewire\Component;

class ServicePage extends Component
{

    public string  $category;
    public ?object $services;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = Category::where( 'model' ,'service' )->get();
        $this->category   = $category;



        if( !empty( $category ) ){
            $this->services = Service::with(['categories'])
                ->whereHas('categories' ,function ($query) use ($category) {
                    $query->where('slug' ,$category);
                })
                ->get();
        }else {
            $this->services = Service::all();
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
