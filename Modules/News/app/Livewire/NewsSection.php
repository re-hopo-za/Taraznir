<?php

namespace Modules\News\app\Livewire;

use Livewire\Component;
use Modules\News\app\Models\News;

class NewsSection extends Component
{
    public function render()
    {
        $items = redis_handler( 'news:section' ,function (){
            return News::with(['category' ,'meta'])
                ->activeScope()
                ->orderBy('chosen' ,'DESC')
                ->limit(config('news.section_limit' ,3))
                ->get();
        });

        return view('news::news-section',[
            'items' => $items
        ]);
    }
}
