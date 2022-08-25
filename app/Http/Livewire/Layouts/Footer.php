<?php

namespace App\Http\Livewire\Layouts;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {

        $gallery     = Gallery::take(3)->orderBy('chosen' ,'asc')->get();
        $categories  = Category::where('model' ,'service')->take(8)->get();
        $recentPosts = Blog::take(2)->orderBy('chosen' ,'asc')->get();

        return view('layouts.footer' ,[
            'galleries'   => $gallery ,
            'categories'  => $categories ,
            'recentPosts' => $recentPosts
        ]);
    }
}
