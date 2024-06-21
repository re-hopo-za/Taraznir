<?php

namespace Modules\Ecommerce\app\Livewire\Product;

use Illuminate\Contracts\View\View;
use Jorenvh\Share\Share;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Modules\Core\app\Models\Option;
use Modules\Core\app\Traits\CommonLivewireComponentTrait;
use Modules\Ecommerce\app\Models\Product;

class ProductDetail extends Component
{
    use CommonLivewireComponentTrait;

    public string $object   = Product::class;
    public string $model     = 'product';
    public mixed $share      = null;
    public mixed $item       = null;
    public mixed $categories = null;
    public mixed $options    = null;

    public function mount($slug): void
    {
        $this->item = common_redis_first_query(
            "product:$slug",
            $this->object,
            ['category' ,'meta' ,'media' ,'comments'],
            ['slug' ,$slug]
        );
        abort_if(!$this->item ,404);
        $this->categories = self::categories();

        $this->options = redis_handler('theme:options' ,function (){
            return
                Option::where('key' ,'theme_options')
                    ->with(['meta' ,'media'])
                    ->first();
        });

        $this->share = (new Share)->page(
            route('product').$this->item->slug,
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
        return view('ecommerce::product.product-detail');
    }
}
