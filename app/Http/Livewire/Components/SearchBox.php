<?php

namespace App\Http\Livewire\Components;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class SearchBox extends Component
{

    public ?string $model = "";

    public function mount( $model )
    {
        $this->model = $model;
    }

    public function render()
    {
        return view('components.search-box' ,[
            'route' => $this->model
        ]);
    }
}
