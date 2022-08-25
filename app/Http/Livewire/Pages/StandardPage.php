<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Standard;
use App\Models\Tag;
use Livewire\Component;

class StandardPage extends Component
{
    public string  $category;
    public string  $tag;
    public ?object $standard;
    public ?object $categories;


    public function mount( $category = '' )
    {
        $this->categories = Category::where( 'model' ,'standard' )->get();
        $this->category   = $category;
        if( !empty( $category ) ){
            $this->standard = Standard::with(['categories'])
                ->whereHas('categories' ,function ($query) use ($category) {
                    $query->where('slug' ,$category);
                })
                ->get();
        }else {
            $this->standard = Standard::all();
        }
    }

    public function render()
    {
        return view('pages.standard-page'  ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'standards'  => $this->standard ,
        ]);
    }
}
