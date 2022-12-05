<?php

namespace App\Http\Livewire\Components;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class SearchBox extends Component
{

    public ?string $term = "";
    public ?string $model = "";

    public function mount( $term ,$model )
    {
        $this->term  = $term;
        $this->model = 'App\Models\\'.$model;
    }

    public function render()
    {
        sleep(1);
        $status = class_exists( $this->model );
        $items = new Collection();
        if ( $status ){
            $items = $this->model::search( $this->term )->take(5)->get();
        }
        return view('components.search-box' ,[
            'items' => $items ,
            'route' => $this->model
        ]);
    }
}
