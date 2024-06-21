<?php

namespace Modules\Standard\app\Livewire;

use Illuminate\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;
use Modules\Standard\app\Models\Standard;

class StandardDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Standard::class;
    public string $model    = 'standard';
    protected $share = '';
    public $item ,$categories ,$options ,$next ,$previous;
    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "standard:$slug",
           $this->object,
           ['category' ,'meta' ,'media'],
           ['slug' ,$slug]
        );

        if( !$this->item )
            abort(404);

        $this->previous = redis_handler( "standard:previous-$slug",function (){
            return
                Standard::where('id' ,'<' ,$this->item->id)
                    ->orderBy('id' ,'DESC')
                    ->first();
        });

        $this->next = redis_handler( "standard:next-$slug" ,function (){
            return
                Standard::where('id' ,'>' ,$this->item->id)
                    ->orderBy('id')
                    ->first();
        });

        $this->categories = self::categories();

        $this->share = (new Share)->page(
            route('standard').$this->item->slug,
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
        return view('standard::standard-detail');
    }
}
