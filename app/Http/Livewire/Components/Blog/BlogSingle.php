<?php

namespace App\Http\Livewire\Components\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class BlogSingle extends Component
{
    public ?object $blog;
    public ?object $previous;
    public ?object $next;

    public function mount( $blog )
    {
        $this->blog = $blog;

        $this->previous = Cache::tags(['blog'])->rememberForever('blog_previous_'. $blog?->id  ,function (){
            return Blog::where( 'id' ,'<' ,$this->blog?->id )->orderBy('id', 'desc')->first();
        });

        $this->next = Cache::rememberForever('blog_next_'. $blog?->id  ,function (){
            return Blog::tags(['blog'])->where( 'id' ,'>' ,$this->blog?->id )->orderBy('id', 'asc')->first();
        });
    }

    public function render()
    {
        return view('components.blog.blog-single' ,[
            'blog'     => $this->blog ,
            'previous' => $this->previous ,
            'next'     => $this->next ,
            'comments' => $this->blog->comments ,
        ]);
    }



}
