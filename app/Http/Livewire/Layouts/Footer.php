<?php

namespace App\Http\Livewire\Layouts;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $gallery = Cache::rememberForever( 'footer_gallery' ,function (){
            return Category::with(['blogs'])->where('slug' ,'footer_gallery' )
                ->take(3)->get();
        });
        $categories = Cache::rememberForever( 'footer_service' ,function (){
            return Category::where('model' ,'service')->take(8)->get();
        });
//        $recentPosts = Cache::tags(['blog'])->rememberForever( 'footer_recent_blog' ,function (){
//            return  Blog::take(2)->orderBy('chosen' ,'asc')->get();
//        });

        $recentPosts = Cache::rememberForever( 'footer_recent_blog' ,function (){
            return  Blog::take(2)->orderBy('chosen' ,'asc')->get();
        });
//        $sliders = redisHandler( 'footer' ,function (){
//            return Option::where('key' ,'sliding_item')->get();
//        });

        return view('layouts.footer' ,[
            'galleries'   => $gallery ,
            'categories'  => $categories ,
            'recentPosts' => $recentPosts
        ]);
    }
}
