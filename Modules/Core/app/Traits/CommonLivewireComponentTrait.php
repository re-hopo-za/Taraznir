<?php

namespace Modules\Core\app\Traits;


use JetBrains\PhpStorm\NoReturn;
use Livewire\WithPagination;
use Modules\Core\app\Models\Category;

trait CommonLivewireComponentTrait
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public int $limit                 = 10;
    public string $order_by           = 'ASC';
    public ?string $search            = null;
    public ?int $category             = 0;
    protected mixed $items            = [];


    public function categories()
    {
       return
           redis_handler("$this->model:categories" ,function (){
                return Category::with($this->model)->where('model' ,$this->model)->get();
            });
    }


    #[NoReturn]
    public function query(): void
    {
        $query = $this->object::with('category');
        if($this->search)
            $query
                ->whereIn('id',
                    $this->object::search($this->search)->get()?->pluck('id')?->toArray()
                );

        if($this->category)
            $query
                ->whereHas('category' ,function ($query){
                    $query
                        ->where('model' ,$this->model)
                        ->where('id'    ,$this->category);
                });

        $query->orderBy('created_at' ,$this->order_by);
        $this->items = $query->paginate($this->limit);
        $this->resetPage();
    }


    #[NoReturn]
    public function setSearching($keyword = ''): void
    {
        $this->search = $keyword;
        $this->query();
    }


    #[NoReturn]
    public function setCategory($categoryID): void
    {
        $this->category = $categoryID;
        $this->query();
    }

    #[NoReturn]
    public function setQuery(): void
    {
        $this->query();
    }


    #[NoReturn]
    public function setOrder(): void
    {
        $this->query();
    }


}
