<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class BlogSingle extends Component
{
    public ?object $blog;
    public ?object $categories;
    public ?object $tags;
    public ?object $related;
    public ?object $previous;
    public ?object $next;

    public function mount( $slug )
    {
        $this->blog = Blog::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        if( !isset( $this->blog->id ) ) {
            return abort(404);
        }

        $this->categories  = Cache::rememberForever( 'blog_categories' ,function (){
            return Category::where( 'model' ,'blog' )->get();
        });

        $categories  = $this->blog->categories->modelKeys();
        $this->related = Cache::rememberForever( 'blog_related_'.$slug ,function () use($categories){
            return Blog::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories );
            })->where('id', '<>', $this->blog->id )->take(3)->get();
        });

        if ( !$this->related->count() ) {
            $this->related = Cache::rememberForever( 'blog_not_related_'.$slug ,function (){
                return Blog::where('id', '<>', $this->blog->id )->take(3)->get();
            });
        }

    }


    public function render()
    {
        return view('pages.blog-single',[
            'categories' => $this->categories ,
            'blog'       => $this->blog ,
            'related'    => $this->related ,
            'meta'       => $this->blog->meta->pluck('value','key'),
        ]);
    }

}
