<?php

namespace Modules\Blog\app\Livewire;

use Livewire\Component;
use Modules\Blog\app\Models\Blog;

class BlogSection extends Component
{
    public function render()
    {
        $blogs =(object) redis_handler( 'blog:section' ,function (){
            return
                Blog::with(['category' ,'meta' ,'media'])
                    ->activeScope()
                    ->orderBy('chosen' ,'DESC')
                    ->limit(config('blog.section_limit' ,10))
                    ->get();
        });

        return view('blog::blog-section',[
            'items' => $blogs
        ]);
    }
}
