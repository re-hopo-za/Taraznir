<?php

namespace Modules\Theme\app\Livewire\Widgets;

use Illuminate\View\View;
use Livewire\Component;

class PostsWidget extends Component
{
    protected ?string $model  = '';
    protected ?string $object = '';
    protected $items;

    public function mount($model ,$object): void
    {
        $this->model  = $model;
        $this->object = $object;
    }

    public function render(): View
    {

        $this->items = common_redis_get_query(
            strtolower($this->model)."recent",
            $this->object,
            ['category' ,'meta' ,'media'],
            config('core.recent_limit' ,10)
        );

        return view('theme::widgets.posts-widget',[
            'title' => models_name($this->model.'s') ?? null
        ]);
    }
}
