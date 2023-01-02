<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;


    public string  $category;
    public ?object $categories;
    public ?object $recent;


    public function mount( $category = '' )
    {
        $this->category   = $category;
        $this->categories = redisHandler( 'categories:blogs' ,function (){
            return Category::where( 'model' ,'blog' )->get();
        });
    }


    public function render()
    {
        if( !empty( $this->category ) ){
            $blogs = redisHandler( 'blogs:specific_category_'.$this->category ,function(){
                return Blog::whereHas('categories' ,function ($query) {
                    $query->where('slug' ,$this->category );
                })->paginate( 8 );
            });
        }else{
            $blogs = redisHandler( 'blogs:' ,function (){
                return Blog::with(['comments' ,'meta'])->paginate( 8 );
            });
        }

        return view('pages.blog-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'blogs'      => $blogs ,
            'recent'     => $blogs->take(3)
        ]);
    }
}
