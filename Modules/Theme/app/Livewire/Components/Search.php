<?php

namespace Modules\Theme\app\Livewire\Components;

use Illuminate\View\View;
use Livewire\Component;
use Modules\Blog\app\Models\Blog;
use Modules\Ecommerce\app\Models\Product;
use Modules\Standard\app\Models\Standard;

class Search extends Component
{
    public ?string $keyword   = null;
    protected bool $properMobile = false;
    protected ?array $foundItems = [];

    public array $modelsDetail = [
        Blog::class => [
            'title' => 'مقاله‌ها',
            'slug'  => 'blog',
        ],
        Standard::class => [
            'title' => 'استاندارد‌ها',
            'slug'  => 'standard',
        ],
        Product::class => [
            'title' => 'محصولات',
            'slug'  => 'product',
        ],
    ];


    public function mount($properMobile = false): void
    {
        $this->properMobile = $properMobile;
    }


    public function updatedKeyword(): void
    {
        if($this->keyword){
            $models = [
                Blog::class,
                Standard::class,
                Product::class,
            ];
            foreach ($models as $model) {
                $this->foundItems[$model] =
                    $model::
                    where('title', 'like', '%' . $this->keyword . '%')
                        ->get();
            }
        }else{
            $this->foundItems = [];
        }

    }


    public function render(): View
    {
        return view('theme::components.search');
    }
}
