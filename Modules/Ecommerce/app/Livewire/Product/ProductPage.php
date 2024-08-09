<?php

namespace Modules\Ecommerce\app\Livewire\Product;

use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Admin\Support\Forms\Components\TranslatedRichEditor;
use Lunar\FieldTypes\Text;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Product;
use Modules\Core\app\Models\Category;

class ProductPage extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    public ?object $categories = null;
    protected ?object $items = null;
    public ?int $category_id = null;
    public ?string $keyword = null;
    public ?int $limit = 12;
    public ?string $orderBy = 'ASC';

    public function mount(): void
    {
        $this->categories = Category::where('model' ,'product')->whereNull('parent_id')
            ->with('childrenCategories')
            ->get();

        $this->items = Product::with('media')->get();
    }


    #[NoReturn]
    public function setSearching($keyword): void
    {
        $this->keyword = $keyword;
        $this->getProducts();
    }

    #[NoReturn]
    public function setCategory($categoryID): void
    {
        $this->category_id = $categoryID;
        $this->getProducts();
    }

    #[NoReturn]
    public function setOrder(): void
    {
        $this->getProducts();
    }

    #[NoReturn]
    public function setLimit(): void
    {
        $this->getProducts();
    }


    public function getProducts(): void
    {
        if ($this->category_id){
            $categories = Category::where('model' ,'product')
                ->where('id' ,$this->category_id)
                ->with('childrenCategories')
                 ->get()
                 ->toArray();

            $flattened_array = [];
            array_walk_recursive($categories, function($a ,$k) use (&$flattened_array) {
                if( $k === 'id' )
                    $flattened_array[] = $a;
            });
            $flattened_array = array_unique($flattened_array);
            $query = Product::whereHas('category', function ($query) use ($flattened_array) {
                $query->where('id' ,$flattened_array);
            });
        }else{
            $query = Product::query();
        }

        if($this->keyword)
            $query->whereIn('id' ,Product::search($this->keyword)->get()->pluck('id')->toArray());

        $query->orderBy('created_at' ,$this->orderBy);
        $this->items = $query->paginate($this->limit);
        $this->resetPage();
    }


    #[Layout('theme::layout.app')]
    public function render(): View
    {
        $this->getProducts();
        return view('ecommerce::product/product-page',[
            'seo' => main_pages_seo()
        ]);
    }
}
