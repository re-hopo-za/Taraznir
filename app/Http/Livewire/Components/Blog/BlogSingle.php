<?php

namespace App\Http\Livewire\Components\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogSingle extends Component
{
    public ?object $blog;
    public ?object $previous;
    public ?object $next;

    public function mount( $blog )
    {
        $this->blog = $blog;

        $this->previous = Blog::where(
            'id' ,'<' ,$this->blog->id
        )->orderBy('id', 'desc')
            ->first();

        $this->next     = Blog::where(
            'id' ,'>' ,$this->blog->id
        )->orderBy('id', 'asc')
            ->first();
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
