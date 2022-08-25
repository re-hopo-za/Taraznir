<?php

namespace App\Http\Livewire\Components\Blog;

use Livewire\Component;
use Livewire\WithPagination;

class BlogsItems extends Component
{
    use WithPagination;

    protected $blogs;

    public function mount( $blogs )
    {
        $this->blogs = $blogs;
    }

    public function render()
    {
        return view('components.blog.blogs-items' ,[
            'blogs' => $this->blogs
        ]);
    }


}
