<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $en_slug = Str::slug( $slug );
        $this->blog = redisHandler('blogs:'.$en_slug ,function () use($slug) {
            return Blog::where( 'slug' ,'=' ,$slug )->with(['meta','categories' ])->first();
        });
        if( !isset( $this->blog->id ) ) {
            return abort(404);
        }

        $blogs = redisHandler( 'blogs:' ,function (){
            return Blog::with(['comments' ,'meta'])->paginate( 8 );
        });

        $this->categories = redisHandler( 'categories:blogs' ,function (){
            return Category::where( 'model' ,'blog' )->get();
        });


        $categories = $this->blog->categories->modelKeys();
        $this->related = redisHandler( 'blogs:related_'.$en_slug,function () use($categories ,$blogs){
            return $blogs->filter( fn( $item ) => $item->whereIn('categories.id' ,$categories) )
                ->where('id', '<>', $this->blog->id )->take(3);
        });


        if ( !$this->related->count() ) {
            $this->related = redisHandler( 'blogs:not_related_'.$en_slug ,function () use($blogs){
                return $blogs::where('id', '<>', $this->blog->id )->take(3)->get();
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
