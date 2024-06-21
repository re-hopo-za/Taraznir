<?php

namespace Modules\Catalog\app\Livewire;

use Illuminate\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Catalog\app\Models\Catalog;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;

class CatalogDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Catalog::class;
    public string $model    = 'catalog';
    protected $share = '';
    public $item ,$categories ,$options ,$next ,$previous;
    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "catalog:$slug",
           $this->object,
           ['category' ,'meta' ,'media'],
           ['slug' ,$slug]
        );

        if( !$this->item )
            abort(404);

        $this->previous = redis_handler( "catalog:previous-$slug",function (){
            return
                Catalog::where('id' ,'<' ,$this->item->id)
                    ->orderBy('id' ,'DESC')
                    ->first();
        });

        $this->next = redis_handler( "catalog:next-$slug" ,function (){
            return
                Catalog::where('id' ,'>' ,$this->item->id)
                    ->orderBy('id')
                    ->first();
        });

        $this->categories = self::categories();

        $this->share = (new Share)->page(
            route('catalog').$this->item->slug,
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
        return view('catalog::catalog-detail');
    }
}
