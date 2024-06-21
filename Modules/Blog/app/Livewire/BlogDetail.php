<?php

namespace Modules\Blog\app\Livewire;

use Illuminate\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Blog\app\Models\Blog;
use Modules\Core\app\Models\Option;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;

class BlogDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Blog::class;
    public string $model    = 'blog';
    protected $share = '';
    public $item ,$categories ,$options ,$next ,$previous;
    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "blog:$slug",
           $this->object,
           ['category' ,'meta' ,'media' ,'comments'],
           ['slug' ,$slug]
        );

        if( !$this->item )
            abort(404);

        $this->previous = redis_handler( "blog:previous-$slug",function (){
            return
                Blog::where('id' ,'<' ,$this->item->id)
                    ->orderBy('id' ,'DESC')
                    ->first();
        });

        $this->next = redis_handler( "blog:next-$slug" ,function (){
            return
                Blog::where('id' ,'>' ,$this->item->id)
                    ->orderBy('id')
                    ->first();
        });

        $this->categories = self::categories();

        $this->options = redis_handler( 'theme:options' ,function (){
            return
                Option::where('key' ,'theme_options')
                    ->with(['meta' ,'media'])
                    ->first();
        });


        $this->share = (new Share)->page(
            route('blog').$this->item->slug,
            $this->item->title,
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->getRawLinks();

    }


    #[Layout('theme::layout.app')]
    public function render(): View
    {
        return view('blog::blog-detail');
    }
}
