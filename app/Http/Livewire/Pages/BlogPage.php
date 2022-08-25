<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
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
        $this->categories = Category::where( 'model' ,'blog' )->get();
        $this->category   = $category;
        $this->recent     = Blog::orderBy('id','desc')
            ->take(3)
            ->get();
    }


    public function render()
    {
        if( !empty( $this->category  ) ){
            $blog = Blog::with(['categories' ,'comments' ,'meta'])
                ->whereHas('categories' ,function ($query) {
                    $query->where('slug' ,$this->category );
                })
                ->get();

        }else {
            $blog = Blog::with(['comments' ,'meta'])
                ->paginate( 5  );
        }

        return view('pages.blog-page' ,[
            'categories' => $this->categories ,
            'category'   => $this->category ,
            'blogs'      => $blog,
            'recent'     => $this->recent
        ]);
    }
}
