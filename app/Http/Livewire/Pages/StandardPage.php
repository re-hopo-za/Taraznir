<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Standard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class StandardPage extends Component
{
    public string  $category;
    public string  $tag;
    public ?object $standards;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = redisHandler( 'standards_categories' ,function (){
            return Category::where( 'model' ,'standard' )->get();
        });
        $this->category = $category;

        if( !empty( $category ) ){
            $this->standards = redisHandler( 'standards_specific_category' ,function (){
                return Standard::with(['categories'])->whereHas('categories' ,function ($query){
                    $query->where('slug' ,$this->category);
                })->get();
            });
        }else {
            $this->standards = redisHandler( 'standards' ,function (){
                return Standard::with(['categories'])->get();
            });
        }
    }

    public function render()
    {
        return view('pages.standard-page'  ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'standards'  => $this->standards ,
        ]);
    }
}
