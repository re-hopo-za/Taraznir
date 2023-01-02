<?php

namespace App\Http\Livewire\Layouts;

use App\Models\Category;
use App\Models\Option;
use App\Models\Standard;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $gallery = redisHandler('options:footer_gallery' ,function (){
            return Option::where('key' ,'footer_gallery')->get();
        });

        $categories = redisHandler('categories:footer_blog' ,function (){
            return Category::where('model' ,'blog')->take(8)->get();
        });

        $recentPosts = redisHandler('blogs:footer_recent_standards' ,function (){
            return Standard::take(2)->orderBy('chosen' ,'asc')->get();
        });


        return view('layouts.footer' ,[
            'galleries'   => $gallery ,
            'categories'  => $categories ,
            'recentPosts' => $recentPosts
        ]);
    }
}
