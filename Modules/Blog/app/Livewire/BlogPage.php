<?php

namespace Modules\Blog\app\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Blog\app\Models\Blog;
use Modules\Core\app\Models\Category;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;

class BlogPage extends Component
{
    use CommonLivewireComponentTrait;

    public string $object = Blog::class;
    public string $model  = 'blog';
    public string $config = 'blog.section_limit';
    public $listeners     = ['setSearching' ,'setCategory'];
    public mixed $with    = ['category' ,'meta' ,'media' ,'user'];
    public mixed $categories;


    public function mount($slug = null): void
    {
        $this->limit      = config($this->config ,10);
        $this->categories = self::categories();
        if($slug)
            $this->category = Category::where('slug' ,$slug)->first()->id;
    }

    #[Layout('theme::layout.app')]
    public function render(): View
    {
        $this->query();
        return view('blog::blog-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
