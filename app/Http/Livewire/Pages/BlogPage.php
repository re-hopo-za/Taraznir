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
            $blogs = redisHandler( 'blogs:category:'.$this->category.$this->page ,function(){
                return Blog::active()->whereHas('categories' ,function ($query) {
                    $query->where('slug' ,$this->category );
                })->sort()->paginate( 8 ,page:$this->page);
            });
            if( empty($blogs) ) {
                return abort(404);
            }
        }else{
            $blogs = redisHandler( 'blogs:'.$this->page ,function (){
                return Blog::active()->with(['comments' ,'meta'])->sort()->paginate( 8 ,page:$this->page);
            });
        }

        $recent = redisHandler( 'blogs:recent' ,function (){
            return Blog::active()->with(['comments' ,'meta'])->take(3)->sort()->get();
        });

        return view('pages.blog-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'blogs'      => $blogs ,
            'recent'     => $recent
        ]);
    }
}
