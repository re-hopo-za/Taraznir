<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPage extends Component
{
    use WithPagination;


    public string  $category;
    protected  $blog;
    public ?object $categories;
    public ?object $recent;

    public function mount( $category = '' )
    {

        $this->categories  = Cache::rememberForever( 'blogs_categories' ,function (){
            return Category::where( 'model' ,'blog' )->get();
        });
        $this->category = $category;
    }


    public function render()
    {
        if( !empty( $this->category  ) ){
            $blogs  = Cache::rememberForever( 'blogs_specific_category' ,function (){
                return Blog::with(['categories' ,'comments' ,'meta'])
                    ->whereHas('categories' ,function ($query) {
                        $query->where('slug' ,$this->category );
                })->paginate( 8 );
            });

        }else {
            $blogs  = Cache::rememberForever( 'blogs' ,function (){
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
